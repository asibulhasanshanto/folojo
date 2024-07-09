<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('pages.products')->with('products', $products);
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // increment the view count
        $product->increment('clicks');
        return view('pages.productDetails')->with('product', $product);
    }

    public function buyNow(Product $product)
    {
        $product->increment('buy_clicks');
        return redirect()->away('https://www.facebook.com/Foolojo?mibextid=ZbWKwL');
    }
}