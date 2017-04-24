<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);// relasi one to one
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }


    public function dosen_matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class);// relasi many to one
    }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
}
