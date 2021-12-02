<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
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

// category
Route::get('/categories/manage', [CategoryController::class, 'manage'])->middleware('auth');
Route::resource('/categories', CategoryController::class);

// Cart
// Route::get('/my-cart', [CartController::class, 'manage']);
Route::get('/my-cart/checkout', [CartController::class, 'checkout'])->middleware('is_buyer');
Route::get('/my-cart/{product}', [CartController::class, 'edit'])->middleware('is_buyer');
Route::resource('/my-cart', CartController::class)->except('create', 'show');

// History
// Route::get('/my-history', [HistoryController::class, 'manage']);
Route::resource('/my-history', TransactionController::class)->middleware('is_buyer');

// Login
Route::get('/login',  [LoginController::class, 'index'])->middleware('guest');
Route::post('/login',  [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
