<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.view-product', [
            'title' => 'Products',
        ]);
    }

    public function add()
    {
        return view('pages.add-product', [
            'title' => 'Add Product',
        ]);
    }

    public function detail()
    {
        return view('pages.detail-product', [
            'title' => 'Product Detail',
        ]);
    }

    public function edit()
    {
        return view('pages.edit-product', [
            'title' => 'Edit Product',
        ]);
    }
}
