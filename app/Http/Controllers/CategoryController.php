<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.view-category');
    }

    public function add()
    {
        return view('pages.add-category');
    }

    public function edit()
    {
        return view('pages.edit-category');
    }
}
