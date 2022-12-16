<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartStock;
use App\Models\Shoe;
use App\Models\Stock;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    private null|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model $cart;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->cart = Cart::query()->where('user_id', Auth::id())->first();
            return $next($request);
        });
    }

    public function index()
    {
        $code = Str::random(6);
        return view('cart', [
            'cart' => $this->cart,
            'code' => $code
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'shoe_id' => ['required', 'numeric'],
            'size_id' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric', 'min:0']
        ]);

        $currentStock = Stock::query()
            ->where('shoe_id', $data['shoe_id'])
            ->where('size_id', $data['size_id'])
            ->first();

        $this->cart->stocks()->toggle([
            $currentStock->id => ['quantity' => $data['quantity']]
        ]);

        return redirect()
            ->route('shoes.show', $data['shoe_id'])
            ->with('message', 'Added to cart.');
    }

    public function update(Request $request, Stock $stock)
    {
        $data = $request->validate([
            'quantity' => ['required', 'numeric', 'min:0']
        ]);

        // https://laravel.com/docs/9.x/eloquent-relationships#updating-a-record-on-the-intermediate-table
        $this->cart->stocks()->updateExistingPivot($stock->id, [
            'quantity' => $data['quantity']
        ]);

        return redirect()
            ->route('cart')
            ->with('message', 'Updated quantity for ' . $stock->shoe->name);
    }

    public function destroy(Stock $stock)
    {
        $this->cart->items()->where('stock_id', $stock->id)->delete();
        return redirect()
            ->route('cart')
            ->with('message', 'Successfully remove ' . $stock->shoe->name);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'code' => ['required', 'confirmed']
        ]);

        $transactionData = $request->except('code', 'code_confirmation');

        $stocks = $this->cart->stocks()->get();
        $user = $request->user();


        $transaction = $user->transactions()->create($transactionData);

        $orders = [];
        foreach ($stocks as $stock) {
            // map orders;
            $orders[] = [
                'image' => $stock->shoe->images()->first()->path,
                'name' => $stock->shoe->name,
                'price' => $stock->shoe->price,
                'quantity' => $stock->pivot->quantity,
                'size' => $stock->size->us,
                'subtotal' => $stock->shoe->price * $stock->pivot->quantity,
            ];

            // update quantity
            $oldQuantity = $stock->shoe->sizes()->where('size_id', $stock->size->id)->first()->stock->quantity;
            $newQuantity = $oldQuantity - $stock->pivot->quantity;
            $stock->shoe->sizes()->updateExistingPivot($stock->size->id, [
                'quantity' => $newQuantity
            ]);
        }
        $transaction->orders()->createMany($orders);

        // Delete all cart items
        $this->cart->items()->delete();

        return redirect()->route('transactions');
    }
}
