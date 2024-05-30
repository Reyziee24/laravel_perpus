<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CekRoleController;
use App\Http\Controllers\Peminjam\BukuController as PeminjamBukuController;
use App\Http\Controllers\Peminjam\KeranjangController;
use App\Http\Controllers\Petugas\BukuController;
use App\Http\Controllers\Petugas\ChartController;
use App\Http\Controllers\Petugas\DashboardController;
use App\Http\Controllers\Petugas\KategoriController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Http\Controllers\Petugas\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', PeminjamBukuController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cek-role', CekRoleController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // role admin dan petugas
    Route::middleware(['role:admin|petugas'])->group(function () {
        Route::get('/dashboard', DashboardController::class);
        Route::get('/kategori', KategoriController::class);
        Route::get('/penerbit', PenerbitController::class);
        Route::get('/buku', BukuController::class);
        Route::get('/transaksi', TransaksiController::class);
        Route::get('/chart', ChartController::class);
    });

    // role peminjam
    Route::middleware(['role:peminjam'])->group(function () {
        Route::get('/keranjang', KeranjangController::class);
        Route::get('/home', function () {
            return view('home');
        })->name('home');
        Route::get('/store', function () {
            return view('store');
        })->name('store');    
        Route::get('/library', function () {
            return view('library');
        })->name('library');  
        Route::get('/pinjam', function () {
            // Logika untuk menangani permintaan untuk halaman pinjam.blade.php
            return view('pinjam'); // Gantilah 'pinjam' dengan nama file blade yang sesuai
        })->name('pinjam');     
    });

    // role admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/user', UserController::class);
    });
});

