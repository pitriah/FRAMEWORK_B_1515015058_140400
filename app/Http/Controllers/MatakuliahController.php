<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    // public function awal()
    // {
    // 	return "Selamat Datang di Tabel Mata Kuliah. Pilih Matakuliah yang Anda Sukai. Ganbatte :)";
    // }
    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$matakuliah = new Matakuliah();
    // 	$matakuliah->title = 'Pemrograman Framework';
    // 	$matakuliah->keterangan = 'Selamat Berpusing Ria :) Semoga Dimudahkan';
    // 	$matakuliah->save();
    // 	return "Data Matakuliah dengan title {$matakuliah->title} telah disimpan";
    // }
    public function awal()
    {
        return view ('matakuliah.awal',['data'=>Matakuliah::all()]);
    }
    public function tambah()
    {
        return view('matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $matakuliah = new Matakuliah();
        $matakuliah->title=$input->title;
        $matakuliah->keterangan=$input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil simpan data' : 'Gagal Simpan Data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id)
    {
        $matakuliah = Matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
     public function update($id, Request $input)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliah->title = $input->title;
        $informasi = $matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
     public function hapus($id)
    {
        $matakuliah = Matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus Data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
}
