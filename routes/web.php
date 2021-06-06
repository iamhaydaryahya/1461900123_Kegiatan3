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

// Route::get('/', function () {
//     return view('transaksi0103');
// });

Route::get('/','ControllerHaydar@index')->name('transaksi');
Route::get('/tambah', 'ControllerHaydar@tambah')->name('transaksi.tambah');
Route::get('/edit/{id}', 'ControllerHaydar@edit')->name('transaksi.edit');
Route::get('/search', 'ControllerHaydar@search')->name('transaksi.search');
Route::post('/proses', 'ControllerHaydar@store')->name('transaksi.store');
Route::post('/hapus/{id}', 'ControllerHaydar@destroy')->name('transaksi.hapus');
Route::post('/update/{id}', 'ControllerHaydar@update')->name('transaksi.update');