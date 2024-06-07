<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// For guest
Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{product}', [HomeController::class, 'detail'])->name('product.detail');

Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/create', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/order/{product}', [OrderController::class, 'addOrder'])->name('product.add.order');
Route::get('/shopping-cart', [OrderController::class, 'productCart'])->name('shopping.cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// For User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// For Admin
Route::middleware(['auth','admin'])->group(function () {
    // Route::resources([
    //     'admin/product' => ProductController::class,
    // ]);

    Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/admin/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';
