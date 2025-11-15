<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rute utama (Beranda)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contoh rute statis (Halaman Organisasi)
Route::view('organisasi/profil-pimpinan', 'pages.profil-pimpinan')->name('organisasi.pimpinan');

