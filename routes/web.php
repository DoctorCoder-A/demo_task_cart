<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('show.categories');
Route::get('sub-categories/{category_id}', [\App\Http\Controllers\CategoryController::class, 'subCategories'])
    ->name('show.sub-categories');
Route::get('products/{category}', [\App\Http\Controllers\ProductController::class, 'category'])
    ->name('show-products.sub-categories');
Route::get('cart', [\App\Http\Controllers\CartController::class, 'index'])
    ->name('cart.index');
