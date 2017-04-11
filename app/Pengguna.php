<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';
    protected $fillable = ['username','password'];
	
	public function mahasiswa() {
	return $this->hasOne(Mahasiswa::class); //one to one dari Pengguna (one) ke mahasiswa (one)
	}
	public function dosen(){
	return $this->hasOne(Dosen::class);	//one to one dari Pengguna (one) ke Dosen (one)
	}
	public function peran(){
	return $this->belongsToMany(Peran::class); //kembalian dari peran (many) ke pengguna (many)
}
}