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
    $paket = \App\Paket::all();
    // return view('admin.paket.index', compact('paket'));
    return view('home', compact('paket'));
});

Auth::routes();
Route::group(['middleware' => ['auth', 'auth.admin']], function () {
    Route::get('paket', 'InvestasiController@paket');
    Route::get('transaksi', 'TransaksiController@index');
    Route::get('transaksi/{id}', 'TransaksiController@show');
});


Route::group(['middleware' => ['auth', 'auth.pengawas']], function () {
    Route::get('task', 'BarangController@index');
    Route::post('monitor/store', 'BarangController@storeMonitor');
    Route::get('barang/{id}', 'BarangController@show');
    Route::post('barang/store', 'BarangController@store');
    Route::get('hapus/{id}', 'BarangController@destroy');
    Route::get('delete/{id}', 'BarangController@hapus');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('investasi', 'InvestasiController');
    Route::post('/store', 'TransaksiController@store');
    Route::get('/package/{id}', 'HomeController@show');
    Route::get('/pesan/{id}', 'TransaksiController@pesan');
    Route::get('/province/{id}/cities', 'TransaksiController@getCities');
    Route::get('/myinvestasi', 'InvestasiController@myinvestasi');
    Route::get('/myinvestasi/{id}', 'InvestasiController@show');
    Route::get('/show/{id}', 'InvestasiController@showId');
    Route::post('/posttf', 'TransaksiController@posttf');
    Route::get('/verification/{value}/{id}', 'TransaksiController@verification');
    Route::get('barang/{id}', 'BarangController@show');
    Route::get('task', 'BarangController@index');
    Route::get('monitor', 'BarangController@monitor');
    Route::get('komen', 'InvestasiController@monitor');
    Route::get('monitor/{id}', 'BarangController@showMonitor');
    Route::get('lihat/{id}', 'BarangController@monitorById');
    Route::get('komen/{id}', 'InvestasiController@komen');
    Route::post('komen/store', 'InvestasiController@storeKomen');
});

// Route::get('/pdf', 'HomeController@see');
Route::get('/pdf', 'HomeController@term');
Route::get('/package', 'HomeController@investasi');
Route::get('/maintenance', 'HomeController@maintenance');
Route::get('/home', 'HomeController@index')->name('home');
