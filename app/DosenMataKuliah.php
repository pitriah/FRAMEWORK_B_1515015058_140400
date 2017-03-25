<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
}
