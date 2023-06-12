<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('loginform')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/register/create', [LoginController::class, 'create'])->name('create-register');

Route::group(['middleware' => ['role:superAdmin|adminAplikasi|teknisi|customer']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/layanan/create-layanan/store', [LayananController::class, 'store'])->name('simpan-layanan');
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
    Route::get('/layanan/create-layanan', [LayananController::class, 'create'])->name('create-layanan');
    Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('edit-layanan');
    Route::put('layanan/{id}', [LayananController::class,'update']);
    Route::get('/layanan/{id}/destroy', [LayananController::class, 'destroy'])->name('hapus-layanan');

    Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi');
    Route::get('/teknisi/create-layanan', [TeknisiController::class, 'create'])->name('create-teknisi');
    Route::post('/teknisi', [TeknisiController::class, 'store'])->name('simpan-teknisi');
    Route::get('/teknisi/{id}/edit', [TeknisiController::class, 'edit'])->name('edit-teknisi');
    Route::put('teknisi/{id}', [TeknisiController::class,'update']);
    Route::get('teknisi/{id}/destroy', [TeknisiController::class,'destroy'])->name('hapus-teknisi');
    Route::get('/pemesanan/{id}/konfirmasi', [TeknisiController::class, 'konfirmasi'])->name('teknisi.pemesanan.konfirmasi');
    Route::get('/pemesanan/{id}/batalkan', [TeknisiController::class, 'batalkan'])->name('teknisi.pemesanan.batalkan');


    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

    Route::resource('/pemesanan', PemesananController::class);

    Route::get('edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('update', [ProfileController::class, 'update'])->name('profile.update');
    // Route::resource('/profile', ProfileController::class);
});