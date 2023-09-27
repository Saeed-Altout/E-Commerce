<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProductsController;
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
Route::get('/about', [StaticController::class,"about"])->name('about.index');
Route::get('/cart', [StaticController::class,"cart"])->name('cart.index');
Route::get('/auth', [StaticController::class,"auth"])->name('auth.index');


Route::resource('products',ProductsController::class);