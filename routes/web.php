<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\HopDongController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protect the dashboard route

// Protect the dashboard route with 'auth' middleware
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/khach-hang/search', [KhachHangController::class, 'search'])->name('khach_hang.search');
    Route::get('/khach-hang', [KhachHangController::class, 'index'])->name('khach_hang.index'); // List all customers
    Route::get('/khach-hang/create', [KhachHangController::class, 'create'])->name('khach_hang.create'); // Show create form
    Route::post('/khach-hang', [KhachHangController::class, 'store'])->name('khach_hang.store'); // Store new customer
    Route::get('/khach-hang/{id}/edit', [KhachHangController::class, 'edit'])->name('khach_hang.edit'); // Show edit form
    Route::put('/khach-hang/{id}', [KhachHangController::class, 'update'])->name('khach_hang.update'); // Update customer
    Route::delete('/khach-hang/{id}', [KhachHangController::class, 'destroy'])->name('khach_hang.destroy'); // Delete customer
});



Route::get('/hop-dong', [HopDongController::class, 'index'])->name('hop_dong.index'); // List contracts
Route::get('/hop-dong/create', [HopDongController::class, 'create'])->name('hop_dong.create'); // Create contract form
Route::post('/hop-dong', [HopDongController::class, 'store'])->name('hop_dong.store'); // Store new contract
Route::get('/hop-dong/{id}/edit', [HopDongController::class, 'edit'])->name('hop_dong.edit'); // Edit contract form
Route::put('/hop-dong/{id}', [HopDongController::class, 'update'])->name('hop_dong.update'); // Update contract
Route::delete('/hop-dong/{id}', [HopDongController::class, 'destroy'])->name('hop_dong.destroy'); // Delete contract
Route::get('/hop-dong/search', [HopDongController::class, 'search'])->name('hop_dong.search');


use App\Http\Controllers\DichVuController;

Route::get('/dich-vu', [DichVuController::class, 'index'])->name('dich_vu.index');
Route::get('/dich-vu/create', [DichVuController::class, 'create'])->name('dich_vu.create');
Route::post('/dich-vu', [DichVuController::class, 'store'])->name('dich_vu.store');
Route::get('/dich-vu/{id}/edit', [DichVuController::class, 'edit'])->name('dich_vu.edit');
Route::put('/dich-vu/{id}', [DichVuController::class, 'update'])->name('dich_vu.update');
Route::delete('/dich-vu/{id}', [DichVuController::class, 'destroy'])->name('dich_vu.destroy');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
