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
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/add_category', function () {
    return view('pages.add_category');
});

Route::get('/detail_product', function () {
    return view('pages.detail_product');
});

Route::get('/edit_cart', function () {
    return view('pages.edit_cart');
});

Route::get('/edit_product', function () {
    return view('pages.edit_product');
});

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/edit_product', function () {
    return view('pages.edit_product');
});
