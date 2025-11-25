<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;

// home make index dari hotelcontroller ya gessss
Route::resourece('/', [HotelController::class, 'index'])->name('home');

Route::resource('kota', KotaController::class);
Route::resource('kamar', KamarController::class);
Route::resource('hotel', HotelController::class);
Route::resource('fasiltas', FasilitasController::class);
Route::resource('review', ReviewController::class)->only(['store', 'update', 'destroy']);
Route::resource('pemesanan', PemesananController::class);
