<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [GeneralController::class, 'home']);

Route::get('/login',  [GeneralController::class, 'login']);

Route::get('/register', [GeneralController::class, 'register']);


Route::get('/products', [ProductController::class, 'index']);

Route::get('/detail-product', [ProductController::class, 'detail']);

Route::get('/add-product', [ProductController::class, 'add']);

Route::get('/edit-product', [ProductController::class, 'edit']);


Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/add-category', [CategoryController::class, 'add']);

Route::get('/edit-category', [CategoryController::class, 'edit']);
