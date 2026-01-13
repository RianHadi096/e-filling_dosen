<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin/dashboard');
Route::get('/admin/histori_e-filling_dosen', [AdminController::class, 'historiEfillingDosen'])->name('admin/histori_e-filling_dosen');
Route::get('/dosen/e-filling', [DosenController::class, 'eFilling'])->name('dosen/efilling');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login/authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');