<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;


//Route::get('/', function () {
//    return view('welcome');
//});

//ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin/dashboard');
Route::get('/admin/histori_e-filling_dosen', [AdminController::class, 'historiEfillingDosen'])->name('admin/histori_e-filling_dosen');
Route::get('/admin/login', [LoginController::class, 'adminLogin'])->name('/admin/login');
Route::post('/admin/login/authenticate', [LoginController::class, 'authenticateAdmin'])->name('/admin/login/authenticate');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('/admin/logout');


//DOSEN
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen/dashboard');
Route::get('/dosen/histori_e-filling', [DosenController::class, 'historiEfilling'])->name('dosen/histori_e-filling');
Route::get('/dosen/login', [LoginController::class, 'dosenLogin'])->name('/dosen/login');
Route::post('/dosen/login/authenticate', [LoginController::class, 'authenticateDosen'])->name('/dosen/login/authenticate');
Route::post('/dosen/logout', [LoginController::class, 'logout'])->name('/dosen/logout');