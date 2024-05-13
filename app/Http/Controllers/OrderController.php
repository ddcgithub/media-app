<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        dd($orders);

        return view('orders.index', ['orders' => $orders]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif,bmp,webp|max:5000|nullable',
            'category' => 'required',
            'type' => 'required',
            'quantity' => 'required|numeric',
            'group' => 'required',
            'notes' => 'nullable'
        ]);

        $newProduct = Order::create($validated);

        return redirect(route('order.index'));
    }
}
