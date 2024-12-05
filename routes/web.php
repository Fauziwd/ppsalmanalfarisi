<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Route tanpa middleware (umum, misalnya halaman utama)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    // Route untuk dashboard (hanya dapat diakses jika login)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    // Route untuk fitur Santri (CRUD)
    Route::get('/santri/create', [SantriController::class, 'create'])->name('santri.create');
    Route::post('/santri', [SantriController::class, 'store'])->name('santri.store');

    Route::get('users/export/', [SantriController::class, 'export']);
});
