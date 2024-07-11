<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekapanController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(
    ['register' => false]
);

Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('home')->middleware('Role');
Route::get('Kasir/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('kasir.index');

Route::resource('kategori', KategoriController::class)->middleware('Role');
Route::resource('produk', ProdukController::class)->middleware('Role');
Route::resource('pemesanan', PemesananController::class);
Route::resource('kasir', PembayaranController::class);
Route::resource('rekapan', RekapanController::class);
Route::resource('user', UserController::class)->middleware('Role');

