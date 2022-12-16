<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    private Builder $transactions;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->transactions = Transaction::query()->where('user_id', Auth::id());
            return $next($request);
        });
    }

    public function index()
    {
        return view('transactions', [
            'transactions' => $this->transactions->with(['orders'])->latest()->get()
        ]);
    }
}
