<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMataKuliah;

class JadwalMataKuliahController extends Controller
{
    public function awal()
    {
    	return "Tabel Jadwal MataKuliah. Salam dari JadwalMataKuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jmk = new JadwalMataKuliah();
    	$jmk->mahasiswa_id = '1';
    	$jmk->ruangan_id = '1';
    	$jmk->dosen_matakuliah_id = '2';
    	$jmk->save();
    	return "Data Jadwal dengan ID Mahasiswa {$jmk->mahasiswa_id} Ruangan dengan ID {$jmk->ruangan_id} dan Dosen Matakuliah dengan ID {$jmk->dosen_matakuliah_id} telah disimpan";
    }
}
