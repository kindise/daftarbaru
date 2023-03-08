<?php

use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PendaftaranController::class, 'index'])->name('registrasi');
Route::post('/simpan-registrasi', [PendaftaranController::class, 'daftarbaru'])->name('simpan-registrasi');
