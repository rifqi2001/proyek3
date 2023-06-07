<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/login', [LoginController::class, 'index'])->name('loginform')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function(){
//     return view('admin');
// });

// Route::resource('teknisi', TeknisiController::class);
Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi');
Route::get('/teknisi/create-layanan', [TeknisiController::class, 'create'])->name('create-teknisi');
Route::post('/teknisi', [TeknisiController::class, 'store'])->name('simpan-teknisi');
Route::get('/teknisi/{id}/edit', [TeknisiController::class, 'edit'])->name('edit-teknisi');
Route::put('teknisi/{id}', [TeknisiController::class,'update']);
Route::get('teknisi/{id}/destroy', [TeknisiController::class,'destroy'])->name('hapus-teknisi');
// Route::get('/layanan', 'LayananController@index')->name('layanan');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/create-layanan', [LayananController::class, 'create'])->name('create-layanan');
Route::post('/layanan', [LayananController::class, 'store'])->name('simpan-layanan');
Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('edit-layanan');
Route::put('layanan/{id}', [LayananController::class,'update']);
Route::get('/layanan/{id}/destroy', [LayananController::class, 'destroy'])->name('hapus-layanan');
// Route::delete('layanan/{id}', [LayananController::class,'destroy'])->name('hapus-layanan');

// Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi');
// Route::get('/teknisi/create-teknisi', [TeknisiController::class, 'create'])->name('create-teknisi');

Route::get('customer', function(){
    return view('users.customer.index');
});
// Route::get('teknisi', function(){
//     return view('admin-layout.akun-teknisi.teknisi');
// });

