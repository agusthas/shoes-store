<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::query()->where('is_admin', false)->get();
        $transactions = Transaction::query()->withCount(['orders'])->get();
        return view('dashboard.index', [
            'transactions' => $transactions,
            'users' => $users
        ]);
    }

}
