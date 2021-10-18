<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.view-product', [
            'title' => 'Products',
        ]);
    }

    public function detail()
    {
        return view('pages.detail-product', [
            'title' => 'Product Detail',
        ]);
    }

    // TODO edit dan add product bisa dijadiin 1 template, tinggal bedain judul nya diatas

    public function add()
    {
        return view('pages.add-product', [
            'title' => 'Add Product',
        ]);
    }

    public function edit()
    {
        return view('pages.edit-product', [
            'title' => 'Edit Product',
        ]);
    }

    public function home()
    {
        return view('pages.home', [
            'title' => 'Home',
            'products' => Product::all()
        ]);
    }

    public function find(Request $request){
        $findedProducts = Product::all();

        if (request('search')){
            $findedProducts->where('title', 'like', '%' . request('search') . '%');
            // $findedProducts = Product::search($request->search)->get();
            // $findedProducts->search(request('search'))->get();
            // dd($findedProducts);        
        }

        return view('pages.search', [
            "products" => $findedProducts
        ]);
    }
}
