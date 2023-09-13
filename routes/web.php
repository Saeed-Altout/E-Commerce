<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticController::class,"index"])->name('home.index');
Route::get('/about', [StaticController::class,"about"])->name('home.about');
Route::get('/contact', [StaticController::class,"contact"])->name('home.contact');


Route::get('/products', [StaticController::class,"products"])->name('home.products');
Route::get('/products/{product?}', [StaticController::class,"product"])->name('home.product');
Route::get('/cart', [StaticController::class,"cart"])->name('home.cart');


Route::resource('computers', ComputersController::class);