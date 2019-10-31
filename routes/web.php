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

Route::get('/logout', function () {
    auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengguna', 'userController@index');

Route::get('/masterdata', 'masterdataController@index');

Route::get('/formtambahpengguna', 'userController@tambah');

Route::post('/formtambahpengguna/simpan', 'userController@simpan');

Route::get('/pengguna/delete/{id}', 'userController@delete');

Route::get('/pengguna/edit/{id}', 'userController@edit');

Route::post('/formeditpengguna/update/{id}', 'userController@update');

Route::get('/peminjam', 'PeminjamController@index');

Route::get('/formtambahpeminjam', 'PeminjamController@tambah');

Route::post('/formtambahpeminjam/simpan', 'PeminjamController@simpan');

Route::get('/peminjam/delete/{id}', 'PeminjamController@delete');

Route::get('/peminjam/edit/{id}', 'PeminjamController@edit');

Route::post('/formeditpeminjam/update/{id}', 'PeminjamController@update');

Route::get('/barang', 'BarangController@index');

Route::get('/formtambahbarang', 'BarangController@tambah');

Route::post('/formtambahbarang/simpan', 'BarangController@simpan');

Route::get('/barang/delete/{id}', 'BarangController@delete');

Route::post('/formeditbarang/update/{id}', 'BarangController@update');

Route::get('/barang/edit/{id}', 'BarangController@edit');

Route::get('/transaksi', 'TransaksiController@index');

Route::get('/formtambahtransaksi', 'TransaksiController@tambah');

Route::post('/formtambahtransaksi/simpan', 'TransaksiController@simpan');

Route::get('/transaksi/delete/{id}', 'TransaksiController@delete');

Route::get('/transaksi/edit/{id}', 'TransaksiController@edit');

Route::post('/formedittransaksi/update/{id}', 'TransaksiController@update');

Route::get('/dikembalikan/{id}','TransaksiController@dikembalikan');

Route::get('/dipinjam/{id}','TransaksiController@dipinjam');

Route::get('kirimnotif','NotifController@kirimpesan');