<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/products',[ProductController::class,'makeProductArray']);

Route::get('/products/{id}', [ProductController::class, 'getProductWithId']);
Route::get('/products/store', [ProductController::class,'addNewProduct']);
Route::put('/products/{id}', [ProductController::class,'updateProductWithId']);

Route::delete('/products', [App\Http\Controllers\HomeController::class,'index'])->name('home');

