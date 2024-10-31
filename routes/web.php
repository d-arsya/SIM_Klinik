<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianPasienController;

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

 Route::view('/dashboard', 'dashboard')->name('dashboard');



 Route::get('/antrian-pasien', [AntrianPasienController::class, 'index'])->name('antrian_pasien');
 Route::get('/tambah-pasien', [AntrianPasienController::class, 'index'])->name('antrian_pasien');



 Route::view('/daftar-pasien', 'daftar.daftar_pasien')->name('daftar_pasien');
 Route::view('/list-invoice', 'invoice.list_invoice')->name('list_invoice');
 Route::view('/list-rawat-inap', 'rawatinap.list_rawatinap')->name('list_rawatinap');

