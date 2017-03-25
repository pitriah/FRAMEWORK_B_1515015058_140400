<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMataKuliah extends Model
{
   protected $table = 'jadwal_matakuliah';
   protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}
