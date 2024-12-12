<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RasController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AntrianPasienController;
use App\Http\Controllers\AntrianPasienDokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(LoginController::class)->group(function() {
    Route::get('/register','register')->name('register');
    Route::post('/store','store')->name('store');
    Route::get('/login','login')->name('login');
    Route::post('/authenticate','authenticate')->name('authenticate');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::post('/logout','logout')->name('logout');
});

Route::resource('owner', OwnerController::class);
Route::resource('pasien', PasienController::class);
Route::get('/antrian-pasien', [AntrianPasienController::class, 'index'])->name('antrian_pasien');
Route::get('/antrian-pasien-dokter', [AntrianPasienDokterController::class, 'index'])->name('antrian_pasien_dokter');
Route::get('/tambah-pasien', [AntrianPasienController::class, 'index'])->name('antrian_pasien');
Route::get('/antrian/pasien', [AntrianPasienController::class, 'index'])->name('antrian_pasien');


Route::view('/daftar-pasien', 'daftar.daftar_pasien')->name('daftar_pasien');
Route::view('/profile-daftar-pasien', 'daftar.profil_pasien')->name('profile_pasien');
Route::view('/detail-hewan-pertanggal', 'daftar.detail_hewan_pertanggal')->name('hewan_pertanggal');

Route::view('/daftar-dokter', 'daftar_dokter.daftar_pasien')->name('daftar_dokter');
Route::view('/profile-daftar-dokter', 'daftar_dokter.profil_pasien')->name('profile_dokter');
Route::view('/detail-owner-dokter', 'daftar_dokter.detail_owner_dokter')->name('detail_owner_dokter');
Route::view('/detail-hewan-pertanggal-dokter', 'daftar_dokter.detail_pertanggal')->name('hewan_pertanggal_dokter');
Route::view('/detail-rawatinap-pertanggal-dokter', 'daftar_dokter.rawatinap_pertanggal')->name('rawatinap_pertanggal_dokter');
Route::view('/tambah-obat-rawatinap', 'daftar_dokter.tambah_obat')->name('rawatinap_tambah_obat');
Route::view('/tambah-diagnosa-rawatinap', 'daftar_dokter.tambah_diagnosa')->name('rawatinap_tambah_diagnosa');
Route::view('/tambah-service-rawatinap', 'daftar_dokter.tambah_service')->name('rawatinap_tambah_service');

Route::view('/list-rawat-inap', 'rawat_inap.index')->name('list_rawatinap');

Route::view('/list-rawat-inap-dokter', 'rawatinap_dokter.index')->name('dokter_rawatinap');

Route::view('/profile', 'profile.index')->name('profile');
Route::view('/edit_profile', 'profile.edit_profile')->name('edit_profile');

Route::view('/profile-dokter', 'profile_dokter.index')->name('dokter_profile');
Route::view('/edit-profile-dokter', 'profile_dokter.edit_profile')->name('dokter_edit_profile');

Route::view('/detail-owner', 'antrian.detail_owner')->name('detail_owner');
Route::view('/detail-hewan', 'antrian.detail_hewan')->name('detail_hewan');
Route::view('/detail-hewan-pertanggal', 'antrian.detail_hewan_pertanggal')->name('hewan_pertanggal');
Route::view('/cetak-invoice', 'invoice.cetak_invoice')->name('cetak_invoice');
Route::view('/edit-owner', 'antrian.edit_owner')->name('edit_owner');
Route::view('/edit-hewan', 'antrian.edit_hewan')->name('edit_hewan');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot');


Route::prefix('masterdata')->as('masterdata.')->group(function () {
    Route::resource('diagnosa', DiagnosaController::class);
    Route::resource('ras', RasController::class);
    Route::resource('warna', WarnaController::class);
    Route::resource('pelayanan', PelayananController::class);
    Route::resource('hewan', HewanController::class);
    Route::resource('users', UsersController::class);
});

Route::prefix('invoice')->as('invoice.')->group(function (){
    Route::get('list',[InvoiceController::class, 'list'])->name('list');
    Route::get('/{id}',[InvoiceController::class, 'detail'])->name('detail');
    Route::get('/{id}/cetak',[InvoiceController::class, 'cetak'])->name('cetak');
});

Route::view('/daftar-pasien/profil-pasien','daftar-pasien.profil_pasien')->name('profil-pasien');



