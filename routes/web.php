<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::resource('barang', BarangController::class);

Route::get('get-barang', [BarangController::class, 'getBarang'])->name('get.barang');
Route::get('cetak-barang', [BarangController::class, 'cetakPdf'])->name('cetak.barang');
Route::get('export-barang', [BarangController::class, 'exportExcel'])->name('export.barang');

