<?php

use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
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
Route::get('/products/{product}/buy', [ProductController::class, 'buyNow'])->name('product.buy');
// blog routes
Route::get('/blogs', [BlogController::class, 'userIndex'])->name('blog.view');
Route::get('/blogs/{slug}', [BlogController::class, 'userShow'])->name('blog.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route for admins with admin middleware
Route::middleware('auth', 'admin')->group(function () {
    // dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // products
    Route::get('/admin/products', [AdminProductsController::class, 'index'])->name('admin.product.view');
    Route::get('/admin/products/create', [AdminProductsController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/products', [AdminProductsController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/products/{product}', [AdminProductsController::class, 'show'])->name('admin.product.show');
    Route::get('/admin/products/{product}/edit', [AdminProductsController::class, 'edit'])->name('admin.product.edit');
    Route::patch('/admin/products/{product}', [AdminProductsController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/products/{product}', [AdminProductsController::class, 'destroy'])->name('admin.product.destroy');

    // get upload image form
    Route::get('/admin/products/{product}/images', [AdminProductsController::class, 'uploadImagesPage'])->name('admin.product.image.upload');

    // save product image
    Route::post('/admin/products/{product}/images', [AdminProductsController::class, 'saveProductImage'])->name('admin.product.image.store');
    // delete product image
    Route::delete('/admin/products/{product}/images/{image}', [AdminProductsController::class, 'deleteProductImage'])->name('admin.product.image.destroy');

    // blogs route
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blog.view');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::get('/admin/blogs/{blog}', [BlogController::class, 'show'])->name('admin.blog.show');
    Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::patch('/admin/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blog.store');
    // admin blog image upload
    Route::post('/admin/blogs/images', [BlogController::class, 'uploadImagesPage'])->name('admin.blog.image.upload');
});

require __DIR__ . '/auth.php';