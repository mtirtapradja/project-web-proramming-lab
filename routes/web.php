<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/add_category', function () {
    return view('add_category');
});

Route::get('/detail_product', function () {
    return view('detail_product');
});

Route::get('/edit_cart', function () {
    return view('edit_cart');
});

Route::get('/dit_product', function () {
    return view('edit_product');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/edit_product', function () {
    return view('edit_product');
});
