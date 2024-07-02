<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Role;
use App\Models\Kasir;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', Role::class]], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('produk', ProdukController::class);
});

// Crud Produk
use App\Http\Controllers\ProdukController;
Route::resource('produk', ProdukController::class);

// Crud Kasir
use App\Http\Controllers\KasirController;
Route::resource('kasir', KasirController::class);
