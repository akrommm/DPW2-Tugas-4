<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdukController;

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

// // frontview
Route::get('/', [ClientController::class, 'showHome']);

// Route::get('shop', function () {
//     return view('frontview.shop');
// });

// Route::get('home', function () {
//     return view('frontview.home');
// });

// Route::get('product', function () {
//     return view('frontview.product');
// });

// Route::get('cart', function () {
//     return view('frontview.cart');
// });

// admin

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);
Route::get('login', [AuthController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

// frontview
Route::get('home', [ClientController::class, 'showHome']);
Route::get('cart', [ClientController::class, 'showCart']);
Route::get('shop', [ClientController::class, 'showShop']);
Route::post('shop/filter', [ClientController::class, 'filter']);
Route::get('product', [ClientController::class, 'showProduct']);
Route::get('product/{produk}', [ClientController::class, 'showProduct']);
