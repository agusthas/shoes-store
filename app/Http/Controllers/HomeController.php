<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

class HomeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::query()->latest()->take(5)->get();
        return view('home', [
            'shoes' => $shoes
        ]);
    }
}
