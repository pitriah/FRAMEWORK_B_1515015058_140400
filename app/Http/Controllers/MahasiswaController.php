<?php 
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Http\Requests;

 use App\Mahasiswa;
 use App\Pengguna;


// class MahasiswaController extends Controller
// {
    // public function awal(){
    	// return "Hello dari MahasiswaController";
    // }
    // public function tambah(){
    	// return $this->simpan();
    // }
    // public function simpan(){
    	// $mahasiswa = new Mahasiswa();
    	// $mahasiswa->nama = "Fajar Kh";
    	// $mahasiswa->nim = "1515015088";
    	// $mahasiswa->alamat = "Pramuka 6";
    	// $mahasiswa->pengguna_id = 3;
    	// $mahasiswa->save();
    	// return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
// }
// public function semua_mahasiswa() {
	// $mahasiswa = mahasiswa::all();  //untuk menampilkan semua data 
	// foreach ($mahasiswa as $mhs) {  //panggilnya pakai foreach
	// echo "nama :" .$mhs->nama;
	// echo "<br>";
	// echo "username :" .$mhs->pengguna->username; 
	// echo "<p>";} 
	// }
	
// public function mahasiswa () {
	// $mahasiswa = mahasiswa::find(7);
	// echo "nama :" .$mahasiswa->nama;
	// echo "<br>";
	// echo "username :" .$mahasiswa->pengguna->username;
// }

// }


class MahasiswaController extends Controller
{

   public function awal()
    {
        $semuaMahasiswa = Mahasiswa::all();
        return view('mahasiswa.awal',compact('semuaMahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function simpan(Request $input)
    {

    $mahasiswa = new mahasiswa;
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    $mahasiswa->pengguna_id = $input->pengguna_id;
    $informasi = $mahasiswa->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    
    }


    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function lihat($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

   public function update($id, Request $input)
    {
         $mahasiswa = mahasiswa::find($id);
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    $mahasiswa->pengguna_id = $input->pengguna_id;
    $informasi = $mahasiswa->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }

     public function hapus($id)
    {
        /* $mahasiswa = Mahasiswa::find($id);
        if($mahasiswa->pengguna()->delete()){
            if($mahasiswa->delete()) $this->informasi = 'Berhasil hapus data';
            return redirect('mahasiswa')-> with(['informasi'=>$this->informasi]); */
			
		$mahasiswa = Mahasiswa::find($id);
        $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
        
    }
}