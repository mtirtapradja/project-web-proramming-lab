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

//search
Route::get('/search', [ProductController::class, 'find']);

//login
Route::get('/login',  [GeneralController::class, 'login'])->middleware('guest');
Route::post('/',  [LoginController::class, 'authenticate']);

//register
Route::get('/register', [GeneralController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/products', [ProductController::class]);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/add-category', [CategoryController::class, 'add']);

Route::get('/edit-category', [CategoryController::class, 'edit']);


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
