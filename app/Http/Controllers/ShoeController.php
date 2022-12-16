<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use App\Models\Size;
use App\Models\Style;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $styles = Style::all();
        $sizes = Size::all();
        // Filtering shoes
        $builder = Shoe::query();
        if ($request->has('keyword')) {
            $builder = $builder->where('name', 'LIKE', '%' . $request->input('keyword') . '%');
        }

        if ($request->has('category')) {
            $category = Category::query()->find($request->input('category'));
            if ($category) {
                $builder = $builder->whereBelongsTo($category);
            }
        }

        if ($request->has('style')) {
            $style = Style::query()->find($request->input('style'));
            if ($style) {
                $builder = $builder->whereBelongsTo($style);
            }
        }

        if ($request->has('size')) {
            $sizeId = $request->input('size');
            $builder = $builder->whereHas('sizes', function ($q) use ($sizeId) {
                $q->where('size_id', $sizeId);
            });
        }

        if ($request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            if ($sortBy == "newest") {
                $builder = $builder->latest();
            } else if ($sortBy == "price_asc") {
                $builder = $builder->orderBy('price');
            } else if ($sortBy == "price_desc") {
                $builder = $builder->orderByDesc('price');
            }
        }

        $shoes = $builder->paginate(12)->withQueryString();
        return view('shoes', [
            'shoes' => $shoes,
            'categories' => $categories,
            'styles' => $styles,
            'sizes' => $sizes,
        ]);
    }

    public function show(Shoe $shoe)
    {
        $shoe->load('sizes');
        return view('shoe', [
            'shoe' => $shoe
        ]);
    }
}
