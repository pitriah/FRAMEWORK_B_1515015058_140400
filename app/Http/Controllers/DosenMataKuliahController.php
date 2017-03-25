<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMataKuliah;

class DosenMataKuliahController extends Controller
{
   public function awal()
    {
    	return "Tabel Dosen MataKuliah. Salam dari DosenMataKuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dmk = new DosenMataKuliah();
    	$dmk->dosen_id = '1';
    	$dmk->matakuliah_id = '1';
    	$dmk->save();
    	return "Data Dosen dengan ID {$dmk->dosen_id} dan Matakuliah dengan ID {$dmk->matakuliah_id} telah disimpan";
    }
}