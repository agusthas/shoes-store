<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('dashboard.transactions.index', ['transactions' => $transactions]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return view('dashboard.transactions.show', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('admin.shoes.index')->with('message', "Successfully deleted");
    }
}
