<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6);
        if (request('search')) {
            $products = Product::where('name', 'like', '%' . request('search') . '%')->paginate(6)->withQueryString();
        }

        return view('pages.home', [
            'title' => 'Home',
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.add-product', [
            'title' => 'Add New Product',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:products', 'min:5'],
            'description' => ['required', 'min:50'],
            'price' => ['required', 'numeric', 'min:1'],
            'category_id' => ['required'],
            'image_url' => ['image', 'file'],
        ]);

        // Buat masukin image nya kalo emang si user masukin image dan udah lolos validasi
        if ($request->file('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->store('product-images');
        }

        Product::create($validatedData);

        return redirect('/products/manage')->with('success', 'Product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages.product.detail-product', [
            'title' => 'Product Detail',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.product.edit-product', [
            'title' => 'Edit Product',
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'description' => ['required', 'min:50'],
            'price' => ['required', 'numeric', 'min:1'],
            'category_id' => ['required'],
            'image_url' => ['image', 'file'],
        ]);

        // $request itu yang baru, $post itu yang lama
        if ($request->name != $product->name) {
            $validatedData['name'] = ['required', 'unique:products'];
        }

        // Buat masukin image nya kalo emang si user masukin image dan udah lolos validasi
        if ($request->file('image_url')) {
            if ($request->oldImage) Storage::delete($request->oldImage);

            $validatedData['image_url'] = $request->file('image_url')->store('product-images');
        }

        Product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/products/manage')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Delete file nya
        if ($product->image_url) Storage::delete($product->image_url);

        // Delete dari table
        Product::destroy($product->id);
        return redirect('/products')->with('success', 'Post has been deleted!');
    }

    public function manage(Request $request)
    {
        return view('pages.product.manage-product', [
            'title' => 'Manage Products',
            'products' => Product::all()
        ]);
    }
}
