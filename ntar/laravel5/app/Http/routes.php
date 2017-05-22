<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('login', function() {
		return view('login.login');
	});


Route::get('/login','LoginController@formLogin'); // form login
Route::post('/process-login','LoginController@processLogin'); // pemroses login
Route::get('/logout','LoginController@logout'); // logout


//Route::get('petugas/tambah','petugasController@tambah'); //tampil di halaman dashboard
Route::get('/petugas', 'petugasController@awal');
Route::get('petugas/edit/{petugas}', 'petugasController@edit');
Route::post('petugas/edit/{petugas}', 'petugasController@update');
Route::get('petugas/lihat/{petugas}', 'petugasController@lihat');
Route::get('petugas/hapus/{petugas}', 'petugasController@hapus');
Route::get('petugas/tambah', 'petugasController@tambah');
Route::post('petugas/simpan', 'petugasController@simpan');

Route::get('kurir', 'kurirController@awal');
Route::get('kurir/lihat/{kurir}','kurirController@lihat');
Route::post('kurir/simpan','kurirController@simpan');
Route::get('kurir/edit/{kurir}','kurirController@edit');
Route::post('kurir/edit/{kurir}','kurirController@update');
Route::get('kurir/hapus/{kurir}','kurirController@hapus');
Route::get('kurir/tambah', 'kurirController@tambah');

Route::get('status', 'statusController@awal');
Route::get('status/lihat/{status}','statusController@lihat');
Route::post('status/simpan','statusController@simpan');
Route::get('status/edit/{status}','statusController@edit');
Route::post('status/edit/{status}','statusController@update');
Route::get('status/hapus/{status}','statusController@hapus');
Route::get('status/tambah', 'statusController@tambah');

Route::get('wilayah', 'wilayahController@awal');
Route::get('wilayah/lihat/{wilayah}','wilayahController@lihat');
Route::post('wilayah/simpan','wilayahController@simpan');
Route::get('wilayah/edit/{wilayah}','wilayahController@edit');
Route::post('wilayah/edit/{wilayah}','wilayahController@update');
Route::get('wilayah/hapus/{wilayah}','wilayahController@hapus');
Route::get('wilayah/tambah', 'wilayahController@tambah');


Route::get('jenisbarang', 'jenisbarangController@awal');
Route::get('jenisbarang/lihat/{jenisbarang}','jenisbarangController@lihat');
Route::post('jenisbarang/simpan','jenisbarangController@simpan');
Route::get('jenisbarang/edit/{jenisbarang}','jenisbarangController@edit');
Route::post('jenisbarang/edit/{jenisbarang}','jenisbarangController@update');
Route::get('jenisbarang/hapus/{jenisbarang}','jenisbarangController@hapus');
Route::get('jenisbarang/tambah', 'jenisbarangController@tambah');

Route::get('jenispackaging', 'jenispackagingController@awal');
Route::get('jenispackaging/lihat/{jenispackaging}','jenispackagingController@lihat');
Route::post('jenispackaging/simpan','jenispackagingController@simpan');
Route::get('jenispackaging/edit/{jenispackaging}','jenispackagingController@edit');
Route::post('jenispackaging/edit/{jenispackaging}','jenispackagingController@update');
Route::get('jenispackaging/hapus/{jenispackaging}','jenispackagingController@hapus');
Route::get('jenispackaging/tambah', 'jenispackagingController@tambah');


Route::get('jenis_pengiriman', 'jenis_pengirimanController@awal');
Route::get('jenis_pengiriman/lihat/{jenis_pengiriman}','jenis_pengirimanController@lihat');
Route::post('jenis_pengiriman/simpan','jenis_pengirimanController@simpan');
Route::get('jenis_pengiriman/edit/{jenis_pengiriman}','jenis_pengirimanController@edit');
Route::post('jenis_pengiriman/edit/{jenis_pengiriman}','jenis_pengirimanController@update');
Route::get('jenis_pengiriman/hapus/{jenis_pengiriman}','jenis_pengirimanController@hapus');
Route::get('jenis_pengiriman/tambah', 'jenis_pengirimanController@tambah');


Route::get('pengiriman', 'pengirimanController@awal');
Route::get('pengiriman/lihat/{pengiriman}','pengirimanController@lihat');
Route::post('pengiriman/simpan','pengirimanController@simpan');
Route::get('pengiriman/edit/{pengiriman}','pengirimanController@edit');
Route::post('pengiriman/edit/{pengiriman}','pengirimanController@update');
Route::get('pengiriman/hapus/{pengiriman}','pengirimanController@hapus');
Route::get('pengiriman/tambah', 'pengirimanController@tambah');


Route::get('statuspengiriman', 'statuspengirimanController@awal');
Route::get('statuspengiriman/lihat/{statuspengiriman}','statuspengirimanController@lihat');
Route::post('statuspengiriman/simpan','statuspengirimanController@simpan');
Route::get('statuspengiriman/edit/{statuspengiriman}','statuspengirimanController@edit');
Route::post('statuspengiriman/edit/{statuspengiriman}','statuspengirimanController@update');
Route::get('statuspengiriman/hapus/{statuspengiriman}','statuspengirimanController@hapus');
Route::get('statuspengiriman/tambah', 'statuspengirimanController@tambah');
