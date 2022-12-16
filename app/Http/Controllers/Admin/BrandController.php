<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brands.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:brands,name',
            'description' => 'required'
        ]);

        Brand::query()->create($data);

        return redirect()->route('admin.brands.index')->with('message', 'Created brand' . $data['name']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('dashboard.brands.show', [
            'brand' => $brand
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:brands,name',
            'description' => 'required'
        ]);

        $brand->update($data);
        return redirect()->route('admin.brands.show', $brand->id)->with('message', "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('admin.brands.index')->with('message', "Successfully deleted");
    }
}
