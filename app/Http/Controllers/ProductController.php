<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.view-product');
    }

    public function detail()
    {
        return view('pages.detail_product');
    }

    public function edit()
    {
        return view('pages.edit_product');
    }
}
