<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
	use HasFactory;

	protected $table = 'pasien';

	protected $fillable = ['id_pasien', 'nama_pasien', 'telp', 'alamat', 'rt_rw', 'id_kelurahan', 'tanggal_lahir', 'jenis_kelamin'];

	public function kelurahan()
	{
		return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
	}


}
