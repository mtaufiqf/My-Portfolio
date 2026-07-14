<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Halaman utama portofolio
Route::get('/', [PortfolioController::class, 'index']);

// Route bawaan Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route edit foto portofolio kamu — sekarang wajib login
    Route::get('/edit-foto', [PortfolioController::class, 'editFoto']);
    Route::post('/edit-foto', [PortfolioController::class, 'updateFoto']);
});

require __DIR__.'/auth.php';