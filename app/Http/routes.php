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
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');


Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');


Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');



Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');


Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::post('dosen_matakuliah/simpan','Dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');


Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::post('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_MatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');


// Route::get('/', function () {
//     return view('posttest1');
// });

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');
Route::get('/coba',function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%s%');
	})->with('dosen')->groupBy('dosen_id')->get();
});

Route::get('/cobacoba',function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%s%');
	})->orWhereHas('matakuliah',function ($kueri)
	{
		$kueri->where('title','like','%a%');
	})->with('dosen','matakuliah')->groupBy('dosen_id')->get();
});


Route::get('/', function () {
    return view('master');
}); 

Route::get('/public', function () {
    return ("Nama Saya : Ahmad Ansyori");
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return ("Hallo World dari pengguna $pengguna");
});

Route::get('test1',function (Illuminate\Http\Request $request)
{
	echo "ini adalah request dari method get ".$request->nama;
});

use Illuminate\Http\Request;
Route::get('test1',function()
{
	echo Form::open(['url'=>'test1']).
	Form::label('nama').
	Form::text('nama',null).
	Form::submit('kirim').
	Form::close();
});
Route::post('test1',function (Request $request)
{
	echo "Hasil dari form input tadi nama : ".$request->nama;
});
