<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products_count = Product::count();
        $clicks_count = Product::sum('clicks');
        $buy_clicks_count = Product::sum('buy_clicks');
        return view('dashboard')->with('products_count', $products_count)
            ->with('clicks_count', $clicks_count)
            ->with('buy_clicks_count', $buy_clicks_count);
    }
}
