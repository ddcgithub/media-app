<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(16);

        return view('home', ['products' => $products]);
    }

    public function detail($product)
    {
        $products = Product::find($product);

        return view('detail', ['products' => $products]);
    }
}
