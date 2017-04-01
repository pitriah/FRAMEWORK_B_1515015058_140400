<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        // return "Hello Mahasiswa!! Selamat Mengerjakan Postest! XOXO";
         return view ('mahasiswa.awal',['data'=>Mahasiswa::all()]);
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama ='Semoga Cepat Lulus!';
        $mahasiswa->nim = '1515015000';
        $mahasiswa->alamat = 'Dimana Saja';
        $mahasiswa->pengguna_id = '2';
        $mahasiswa->save();
        return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
