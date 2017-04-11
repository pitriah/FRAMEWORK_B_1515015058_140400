<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Fajar Khairumman";
    	$dosen->nip = "1515015088";
    	$dosen->alamat = "Pramuka 06";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
public function ket_dosen() {
	$keterangan = dosen::all();  //untuk menampilkan semua data 
	foreach ($keterangan as $ket) {  //panggilnya pakai foreach
	echo "nama :" .$ket->nama;
	echo "<br>";
	echo "Di buat oleh :" .$ket->pengguna->username; 
	echo "<p>";} 
	}
}