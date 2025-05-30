<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());

        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|string|min"5',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('products', $image->hashName('public'));;

            Storage::delete('public/images/' . $product->image);

            $product->update([
                'image' => $image->hasName(),
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        } else {
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::delete('public/images/' . $product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
