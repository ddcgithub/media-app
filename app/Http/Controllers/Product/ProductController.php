<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'category' => 'required',
            'type' => 'required',
            'quantity' => 'required|numeric',
            'group' => 'required',
            'notes' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        // dd($request->name);
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('pages/product.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'category' => 'required',
            'type' => 'required',
            'quantity' => 'required|numeric',
            'group' => 'required',
            'notes' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Deleted Succesfully');
    }
}
