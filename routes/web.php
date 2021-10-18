<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [ProductController::class, 'index']);

// Product
Route::get('/products/manage', [ProductController::class, 'manage'])->middleware('auth');
Route::resource('/products', ProductController::class);

// Login
Route::get('/login',  [LoginController::class, 'index'])->middleware('guest');
Route::post('/login',  [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


// Register
Route::get('/register', [GeneralController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


// category
Route::get('/categories/manage', [CategoryController::class, 'manage'])->middleware('auth');
Route::resource('/categories', CategoryController::class);


Route::get('/my-cart', function () {
    return view('pages.my-cart', [
        'title' => 'My Cart'
    ]);
});

Route::get('/history', function () {
    return view('pages.my-history-transaction', [
        'title' => 'My History Transaction'
    ]);
});
