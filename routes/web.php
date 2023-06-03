<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
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

// Route::get('/layanan', 'LayananController@index')->name('layanan');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('layanan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/create-layanan', [LayananController::class, 'create'])->name('create-layanan');
Route::post('/layanan', [LayananController::class, 'store'])->name('simpan-layanan');
Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('edit-layanan');
Route::put('layanan/{id}', [LayananController::class,'update']);
// Route::delete('layanan/{id}', [LayananController::class,'destroy'])->name('hapus-layanan');
Route::get('/layanan/{id}/destroy', [LayananController::class, 'destroy'])->name('hapus-layanan');

Route::get('customer', function(){
    return view('admin-layout.akun-customer.customer');
});
Route::get('teknisi', function(){
    return view('admin-layout.akun-teknisi.teknisi');
});

