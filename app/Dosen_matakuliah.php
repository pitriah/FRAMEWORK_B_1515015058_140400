<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

	public function dosen(){
	return $this->BelongsTo(Dosen::class);
	}	
	public function matakuliah(){
	//return $this->BelongsTo(Matakuliah::class);
	return $this->BelongsTo(Matakuliah::class); //kebalikan dari hasmany di matakuiahs
	}	
	public function jadwal_matakuliah(){
	return $this->hasMany(Jadwal_matakuliah::class); //one to Many dari dosen matakuiah (one) ke Jadwal matakuliah (many)
	}
	}

