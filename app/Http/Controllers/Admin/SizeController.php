<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('dashboard.sizes.index', ['sizes' => $sizes]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        return view('dashboard.sizes.show', [
            'size' => $size
        ]);
    }
}

