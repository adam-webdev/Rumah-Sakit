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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource( '/user' , 'UserController' ); 
Route::get('/user/hapus/{kode}','UserController@destroy');
Route::resource( '/pasien' , 'pasienController' );
Route::get('/pasien/hapus/{kode}','pasienController@destroy'); 
Route::resource( '/dokter' , 'dokterController' );
Route::get('/dokter/hapus/{kode}','dokterController@destroy');
Route::resource( '/kamar' , 'kamarController' );
Route::get('/kamar/hapus/{kode}','kamarController@destroy');
Route::resource( '/rawatinap' , 'rawatinapController' );
Route::get('/rawatinap/hapus/{kode}','rawatinapController@destroy');
Route::resource( '/obat' , 'ObatController' );
Route::get('/obat/hapus/{kode}','ObatController@destroy');
Route::get('/transaksi/hapus/{kode}','TransaksiController@destroy');
Route::resource( '/transaksi' , 'TransaksiController' );
Route::get('/transaksi/cetakpdf', 'TransaksiController@cetak');
