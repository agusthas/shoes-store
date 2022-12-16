<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Shoe;
use App\Models\Size;
use App\Models\Stock;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoe::query()->paginate(10);
        return view('dashboard.shoes.index', [
            'shoes' => $shoes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'style_id' => ['required'],
            'name' => ['required'],
            'stocks' => ['required', 'array'],
            'stocks.*' => ['required', 'array'],
            'stocks.*.*' => ['required', 'array', 'required_array_keys:size_id,quantity'],
            'stocks.*.*.size_id' => ['numeric'],
            'stocks.*.*.quantity' => ['numeric', 'min:0'],
            'price' => ['required'],
            'description' => ['required'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'file', 'image']
        ]);

        $shoeData = $request->only(['brand_id', 'category_id', 'style_id', 'name', 'price', 'description']);

        $stockCollections = collect($request->stocks)
            ->flatten(1);

        $shoe = Shoe::query()->create($shoeData); // create a shoe

        $stocks = [];
        foreach ($stockCollections as $stock) {
            $sizeId = $stock['size_id'];
            $quantity = $stock['quantity'];

            if ($quantity > 0) {
                $stocks[$sizeId] = ['quantity' => $quantity];
            }
        }
        $shoe->sizes()->sync($stocks);

        // Saving images
        $this->saveImages($request, $shoe);

        return redirect()->route('admin.shoes.index')->with('message', 'Created shoe: ' . $data['name']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $sizes = Size::all();
        $categories = Category::all();
        $styles = Style::all();
        return view('dashboard.shoes.create', [
            'brands' => $brands,
            'sizes' => $sizes,
            'styles' => $styles,
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoe $shoe)
    {
        return view('dashboard.shoes.show', [
            'shoe' => $shoe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shoe $shoe)
    {
        $brands = Brand::all();
        $sizes = Size::all();
        $categories = Category::all();
        $styles = Style::all();
        return view('dashboard.shoes.edit', compact(
            'shoe',
            'sizes',
            'categories',
            'styles',
            'brands'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shoe $shoe)
    {
        $data = $request->validate([
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'style_id' => ['required'],
            'name' => ['required'],
            'stocks' => ['required', 'array'],
            'stocks.*' => ['required', 'array'],
            'stocks.*.*' => ['required', 'array', 'required_array_keys:size_id,quantity'],
            'stocks.*.*.size_id' => ['numeric'],
            'stocks.*.*.quantity' => ['numeric', 'min:0'],
            'price' => ['required'],
            'description' => ['required'],
            'images' => ['nullable', 'array',],
            'images.*' => ['nullable', 'file', 'image']
        ]);

        $shoeData = $request->only(['brand_id', 'category_id', 'style_id', 'name', 'price', 'description']);

        $stockCollections = collect($request->stocks)
            ->flatten(1);

        $shoe->update($shoeData);
        $stocks = [];
        foreach ($stockCollections as $stock) {
            $sizeId = $stock['size_id'];
            $quantity = $stock['quantity'];

            if ($quantity > 0) {
                $stocks[$sizeId] = ['quantity' => $quantity];
            }
        }
        $shoe->sizes()->sync($stocks);

        if ($request->images) {
            Storage::delete($shoe->images()->pluck('path')->all()); // delete all images
            $shoe->images()->delete();
            $this->saveImages($request, $shoe);
        }

        return redirect()->route('admin.shoes.index')->with('message', "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        Storage::delete($shoe->images()->pluck('path')->all());
        $shoe->delete();
        return redirect()->route('admin.shoes.index')->with('message', "Successfully deleted");
    }

    private function saveImages(Request $request, Shoe $shoe): void
    {
        $folderPath = preg_replace('/\s+/', '_', time() . ' ' . $shoe->id);
        $imagesData = [];
        foreach ($request->images as $file) {
            $fileName = preg_replace('/\s+/', '_', time() . ' ' . $file->getClientOriginalName());
            $path = Storage::putFileAs('shoes/' . $folderPath, $file, $fileName);
            $imagesData[] = ['path' => $path];
        }
        $shoe->images()->createMany($imagesData);
    }
}

