<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MateriKuliahController;

// Route Login (tanpa middleware auth)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route yang butuh login (dengan middleware auth)
Route::middleware('auth')->group(function(){
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Jadwal
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

    // Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

    // Materi
    Route::get('/materi', [MateriKuliahController::class, 'index'])->name('materi.index');
    Route::get('/materi/create', [MateriKuliahController::class, 'create'])->name('materi.create');
    Route::post('/materi', [MateriKuliahController::class, 'store'])->name('materi.store');
});