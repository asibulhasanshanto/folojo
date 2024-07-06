<?php

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware([ 'verified'])->name('dashboard');

});

require __DIR__ . '/auth.php';