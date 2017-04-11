<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
	
	public function pengguna(){
	return $this->BelongsTo(Pengguna::class);  //kembalian dari hasone pengguna
	}
	public function dosen_matakuliah(){
	return $this->hasMany(Dosen_Matakuliah::class); //one to Many dari dosen matakuliah (one) ke Jadwal matakuliah (many)
	}
}
