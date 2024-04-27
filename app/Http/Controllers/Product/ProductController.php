<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);

        return view('pages/product.show', ['products' => $products]);

        // return view('welcome.index', compact('lists', 'request'));
    }

    public function create()
    {
        return view('pages/product.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:5000|nullable',
            'category' => 'required',
            'type' => 'required',
            'quantity' => 'required|numeric',
            'group' => 'required',
            'notes' => 'nullable'
        ]);

        if(request()->has('image')) {
            $imagePath = request()->file('image')->store('product','public');
            $validated['image'] = $imagePath;

            // Storage::disk('public')->delete($product->image);
        }

        $newProduct = Product::create($validated);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('pages/product.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif,bmp,webp|max:5000|nullable',
            'category' => 'required',
            'type' => 'required',
            'quantity' => 'required|numeric',
            'group' => 'required',
            'notes' => 'nullable'
        ]);

        if(request()->has('image')) {
            $imagePath = request()->file('image')->store('product','public');
            $validated['image'] = $imagePath;

            // Storage::disk('public')->delete($product->image);
        }

        $product->update($validated);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Deleted Succesfully');
    }
}
