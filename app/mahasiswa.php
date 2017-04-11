<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
	
public function Pengguna()
	{
	return $this->belongsTo(Pengguna::class); //kebalikan dari hasone di pengguna
	}

public function jadwal_mahasiswa()
{
	return  $this->hasMany(Jadwal_matakuliah::class); //one to Many dari Mahasiswa (one) ke Jadwal matakuliah (many)
}	
	
	
	
}

