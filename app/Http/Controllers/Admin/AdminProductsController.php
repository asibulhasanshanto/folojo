<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(8);
        return view('pages.admin.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // product code will be an unique 8 character string
        $product_code = substr(md5(uniqid(rand(), true)), 0, 8);

        return view('pages.admin.createProduct')->with('product_code', $product_code);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'extra_info' => 'nullable',
            'description' => 'required',
            'price' => 'required|numeric',
            'product_code' => 'required|unique:products,product_code|max:8',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.product.view')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('pages.admin.productDetails')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('pages.admin.editProduct')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|unique:products,name,' . $product->id,
            'extra_info' => 'nullable',
            'description' => 'required',
            'price' => 'required|numeric',
            'product_code' => 'required|max:8|unique:products,product_code,' . $product->id,
        ]);

        $product->update($request->all());

        return redirect()->route('admin.product.view')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.view')->with('success', 'Product deleted successfully');
    }

    // save product images
    public function saveProductImage(Request $request, Product $product)
    {
        // validate
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // save the images to db and storage
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/products'), $imageName);
            $product->images()->create(['image' => $imageName]);
        }

        return redirect()->route('admin.product.show', $product->id)->with('success', 'Images uploaded successfully');
    }

    // delete product image
    public function deleteProductImage(Product $product, ProductImages $image)
    {
        $product->images()->where('id', $image->id)->delete();
        // also delete the image from storage
        unlink(public_path('images/products/' . $image->image));

        return redirect()->route('admin.product.show', $product->id)->with('success', 'Image deleted successfully');
    }

    public function uploadImagesPage(Product $product)
    {
        return view('pages.admin.uploadImages')->with('product', $product);
    }
}