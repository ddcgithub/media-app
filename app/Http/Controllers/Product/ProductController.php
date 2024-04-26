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

        return view('pages/product.show');

        // return view('welcome.index', compact('lists', 'request'));
    }

    public function create()
    {
        return view('pages/product.create');
    }

    public function store(Request $request)
    {
        dd($request);
        // return view('pages/product.create');
    }
}
