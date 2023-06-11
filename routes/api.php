<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeknisiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('login', [LoginController::class, 'loginApi']);

Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi');
Route::get('/teknisi/create-layanan', [TeknisiController::class, 'create'])->name('create-teknisi');
Route::post('/teknisi', [TeknisiController::class, 'store'])->name('simpan-teknisi');
Route::get('/teknisi/{id}/edit', [TeknisiController::class, 'edit'])->name('edit-teknisi');
Route::put('teknisi/{id}', [TeknisiController::class,'update']);
Route::get('teknisi/{id}/destroy', [TeknisiController::class,'destroy'])->name('hapus-teknisi');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
