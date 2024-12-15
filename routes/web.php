<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'umum'])->name('home');
Route::get('/tata_tertip', [homeController::class, 'tartip'])->name('tatip');

Route::get('login', [authController::class, 'login'])->name('login');
Route::post('login', [authController::class, 'actionLogin'])->name('actionLogin');
Route::post('logout', [authController::class, 'actionLogout'])->name('actionlogout');

Route::middleware('auth')->group(function () {
    Route::get('admin/umum', [adminController::class, 'umum'])->name('admin.umum');
    Route::get('admin/keamanan', [adminController::class, 'keamanan'])->name('admin.keamanan');
    Route::get('admin/kebersihan', [adminController::class, 'kebersihan'])->name('admin.kebersihan');
    Route::get('admin/iuran', [adminController::class, 'iuran'])->name('admin.iuran');
    Route::get('admin/kegiatan', [adminController::class, 'kegiatan'])->name('admin.kegiatan');


    Route::post('admin/formulir', [adminController::class, 'formulirAction'])->name('admin.formulir.action');
});
