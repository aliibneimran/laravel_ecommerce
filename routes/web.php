<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ProductController as BackendProductController;
use App\Http\Controllers\frontent\HomeController;
use App\Http\Controllers\frontent\ProductController;
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

// Route::get('/', function () {
//     return view('app.welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('shop',[ProductController::class,'index']);

Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('checkout', [ProductController::class, 'checkout'])->name('checkout');


Route::get('/admin',[AdminController::class,'index']);
Route::get('all-products',[BackendProductController::class,'index']);
Route::get('add-product',[BackendProductController::class,'create']);
Route::post('product/store',[BackendProductController::class,'store'])->name('product.store');