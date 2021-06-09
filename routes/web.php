<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::resource('/user','userController');
    // Route::get('user/hapus/{id}','UserController@delete');
    Route::resource('/dokter','DokterController');
    Route::get('dokter/hapus/{id}','DokterController@delete');
    Route::resource('/pasien','PasienController');
    Route::get('pasien/hapus/{id}','PasienController@destroy');
    Route::resource('/obat','ObatController');
    Route::get('obat/hapus/{id}','ObatController@destroy');
    Route::resource('/alat','AlatController');
    Route::get('alat/hapus/{id}','AlatController@destroy');
    Route::resource('/rawatinap','RawatinapController');
    Route::get('rawatinap/hapus/{id}','RawatinapController@destroy');
    Route::resource('/ruangan','RuanganController');
    Route::get('ruangan/hapus/{id}','RuanganController@destroy');
    Route::resource('/supplier','SupplierController');
    Route::get('supplier/hapus/{id}','SupplierController@destroy');
    Route::resource('/rawatinap','RawatinapController');
    Route::get('rawatinap/hapus/{id}','RawatinapController@destroy');
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');
});
Route::middleware(['auth','role:manager'])->group(function(){
    Route::resource('/laporan','LaporanController');
    Route::get('laporan/hapus/{id}','LaporanController@destroy');
    Route::post('laporan/cari','LaporanController@cari');
    Route::get('laporan/cari','LaporanController@cari');
    Route::get('/transaksi/hapus/{kode}','TransaksiController@destroy');
    Route::resource( '/transaksi' , 'TransaksiController' );
    Route::get('/transaksi/cetak/{id}' , 'TransaksiController@cetak')->name('cetak');
});