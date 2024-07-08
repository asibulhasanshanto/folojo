<?php

use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.view');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route for admins with admin middleware
Route::middleware('auth','admin')->group(function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // products
    Route::get('/admin/products', [AdminProductsController::class, 'index'])->name('admin.product.view');
    Route::get('/admin/products/create', [AdminProductsController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/products', [AdminProductsController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/products/{product}', [AdminProductsController::class, 'show'])->name('admin.product.show');
    Route::get('/admin/products/{product}/edit', [AdminProductsController::class, 'edit'])->name('admin.product.edit');
    Route::patch('/admin/products/{product}', [AdminProductsController::class, 'update'])->name('admin.product.update');

});

require __DIR__ . '/auth.php';