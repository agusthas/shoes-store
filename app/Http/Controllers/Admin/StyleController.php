<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $styles = Style::all();
        return view('dashboard.styles.index', ['styles' => $styles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.styles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:styles',
        ]);

        Style::query()->create($data);

        return redirect()->route('admin.styles.index')->with('message', 'Created style: ' . $data['name']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Style $style)
    {
        return view('dashboard.styles.show', [
            'style' => $style
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Style $style)
    {
        return view('dashboard.styles.edit', [
            'style' => $style
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Style $style)
    {
        $data = $request->validate([
            'name' => 'required|max:255|unique:styles',
        ]);

        $style->update($data);
        return redirect()->route('admin.styles.index')->with('message', "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Style $style)
    {
        $style->delete();
        return redirect()->route('admin.styles.index')->with('message', "Successfully deleted");
    }
}
