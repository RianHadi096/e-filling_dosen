<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewerController;


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('welcome_efilling');
});

//ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin/dashboard');
Route::get('/admin/histori_e-filling_dosen', [AdminController::class, 'historiEfillingDosen'])->name('admin/histori_e-filling_dosen');
Route::get('/admin/login', [LoginController::class, 'adminLogin'])->name('/admin/login');
Route::get('/admin/verifikasi_file', [AdminController::class, 'verifikasiFile'])->name('admin/verifikasi_file');
Route::post('/admin/login/authenticate', [LoginController::class, 'authenticateAdmin'])->name('/admin/login/authenticate');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('/admin/logout');

Route::get('/admin/user_management', [AdminController::class, 'userManagement'])->name('admin/user_management');
Route::get('/admin/profil', [AdminController::class, 'profile'])->name('admin/profil');

//DOSEN
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen/dashboard');
Route::get('/dosen/histori_e-filling', [DosenController::class, 'historiEfilling'])->name('dosen/histori_e-filling');
Route::get('/dosen/upload_file', [DosenController::class, 'uploadFile'])->name('dosen/upload_file');
Route::get('/dosen/login', [LoginController::class, 'dosenLogin'])->name('/dosen/login');
Route::post('/dosen/login/authenticate', [LoginController::class, 'authenticateDosen'])->name('/dosen/login/authenticate');
Route::post('/dosen/logout', [LoginController::class, 'logout'])->name('/dosen/logout');

Route::get('/dosen/profil', [DosenController::class, 'profile'])->name('dosen/profil');

//REVIWER
Route::get('/reviewer/dashboard', [ReviewerController::class, 'dashboard'])->name('reviewer/dashboard');
Route::get('/reviewer/login', [LoginController::class, 'reviewerLogin'])->name('/reviewer/login');
Route::post('/reviewer/login/authenticate', [LoginController::class, 'authenticateReviewer'])->name('/reviewer/login/authenticate');
Route::post('/reviewer/logout', [LoginController::class, 'logout'])->name('/reviewer/logout');
Route::get('/reviewer/histori_review', [ReviewerController::class, 'historiReview'])->name('reviewer/histori_review');
Route::get('/reviewer/profil', [ReviewerController::class, 'profile'])->name('reviewer/profil');
Route::get('/reviewer/review_dokumen', [ReviewerController::class, 'reviewDokumen'])->name('reviewer/review_dokumen');