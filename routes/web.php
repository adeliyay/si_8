<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/penjualan', 'HomeController@jual')->name('penjualan');
// Route::get('/barang', 'HomeController@barang')->name('barang');
Route::get('/piutang', 'HomeController@piutang')->name('piutang');
Route::get('/operasional', 'HomeController@op')->name('operasional');
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/barang/input', 'InputController@barang')->name('barang');
Route::post('/barang/input', 'InputController@store')->name('barang.store');
Route::get('/barang/{id}/edit','InputController@edit')->name('barang.edit');
Route::patch('/barang/{id}/edit','InputController@update')->name('barang.update');
Route::get('/barang', 'InputController@index')->name('barang.index');

Route::get('/piutang/input', 'PiutangController@create')->name('piutang.create');
Route::post('/piutang/input', 'PiutangController@store')->name('piutang.store');
Route::get('/piutang', 'PiutangController@index')->name('piutang');
Route::get('/piutang/{id}/edit','PiutangController@edit')->name('piutang.edit');
Route::patch('/piutang/{id}/edit','PiutangController@update')->name('piutang.update');

// Route::get('/input.php', function () {
//     return view('input');
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/penjualan.php', function () {
//     return view('penjualan');
// });

// Route::get('/input.php', function () {
//     return view('input');
// });

// Route::get('/barang.php', function () {
//     return view('Barang');
// });

// Route::get('/piutang.php', function () {
//     return view('piutang');
// });

// Route::get('/operasional.php', function () {
//     return view('operasional');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
