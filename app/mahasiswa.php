<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class);
	}
}
