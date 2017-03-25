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
//PENGGUNA
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

//DOSEN
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

//MAHASISWA
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

//MATA KULIAH
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

//RUANGAN
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

//DOSEN MATA KULIAH
Route::get('dmk','DosenMataKuliahController@awal');
Route::get('dmk/tambah','DosenMataKuliahController@tambah');

//JADWAL MATA KULIAH
Route::get('jmk','JadwalMataKuliahController@awal');
Route::get('jmk/tambah','JadwalMataKuliahController@tambah');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello-world', function(){
// 	return 'Hello World';
// });

// Route::get('pengguna/{pengguna}', function($pengguna)
// {
// 	return "Hello World dari pengguna $pengguna";
// });

// Route::get('kelas_b/framework/{mhs?}', function($mhs="Anonim"){
// 	return "Selamat Datang $mhs";
// });