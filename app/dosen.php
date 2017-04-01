<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    protected $table = 'dosen';
    {
   		public function pengguna() {
   		return $this->belongsTo(Pengguna::class);
   	}
   	public function Dosenmatakuliah()
   	{
   		return $this->hasMany(DosenMataKuliah::class);
   	}
}
