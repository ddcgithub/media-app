<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



// Route::get('admin/dashboard', function () {
//     return view('admin.sample');
// });

// Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{product}', [HomeController::class, 'detail'])->name('product.detail');

// Route::get('/product', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// Route::post('/product', [ProductController::class, 'store'])->name('product.store');
// Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
// Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
// Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resources([
        'product' => ProductController::class,
    ]);
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [HomeController::class, 'index'])->middleware([
    'auth',
    'admin'
]);
