<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('product_list',[ProductController::class,'showProductList'])->name('product_list');

Route::post('place_order',[ProductController::class,'placeOrder'])->name('place_order');
Route::post('update_stock',[ProductController::class,'updateStock'])->name('update_stock');