<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_matakuliah;
use App\dosen;
use App\matakuliah;
use App\mahasiswa;


class Jadwal_matakuliahController extends Controller
{
    public function awal(){
		$semuaMatkul = Jadwal_matakuliah::all();
        return view('Jadwal_matakuliah.awal',compact('semuaMatkul'));
    }
/*     public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$jadwal_matakuliah = new Jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 1;
    	$jadwal_matakuliah->ruangan_id = 1;
    	$jadwal_matakuliah->dosen_matakuliah_id = 1;
    	$jadwal_matakuliah->save();
    	return "Data Jadwal matakuliah telah disimpan";
}
 */
public function jadwal_kulmhs() {
	$jadwal = jadwal_matakuliah::find(1);  //untuk menampilkan semua data
	echo "nama Mahasiswa :" .$jadwal->mahasiswa->nama;
	echo "<br>";
	echo " Berada Di Kelas :" .$jadwal->ruangan->title;
} 

public function tambah(){
    $dosen = Dosen::all();
    $daftar = array('' => '');
    foreach($dosen as $temp)
        $daftar[$temp->id] = $temp->nama;
    return View::make('jadwa_matakuliah.tambah', compact('daftar'));
    }

public function simpan(Request $input){
    $set = Input::get('id');

    $nama = Nama::where('id', $set)->get();
    $title = Title::where('id', $set)->get();

    switch (Input::get('type')) {
        case 'nama':
            $return = '<option value=""> Nama Dosen .....</option>';
            foreach ($nama as $temp) 
                $return = "<option value='$temp->id>$temp->nama</option>";
            return $return;
            break;
        case 'title':
            $return = '<option value=""> Matakuliah .....</option>';
            foreach ($title as $temp) 
                $return = "<option value='$temp->id'>$temp->title</option>";
            return $return;
            break;
    }
}
	
public function edit($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    return view('jadwa_matakuliah.edit')->with(array('jadwa_matakuliah'=>$jadwa_matakuliah));
    }
public function lihat($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    return view('jadwa_matakuliah.lihat')->with(array('jadwa_matakuliah'=>$jadwa_matakuliah));
}
public function update($id, Request $input){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    $jadwa_matakuliah->mahasiswa_id = $input->mahasiswa_id;
    $jadwa_matakuliah->ruangan_id = $input->ruangan_id;
    $jadwa_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
    $informasi = $jadwa_matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('jadwa_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id){
    $jadwa_matakuliah = jadwa_matakuliah::find($id);
    $informasi = $jadwa_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('jadwa_matakuliah')->with(['informasi'=>$informasi]);
}
}
