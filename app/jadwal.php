<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $fillable=[
	'pasien',
	'dokter',
	'penyakit',
	'dr_jam',
	'sd_jam'
   ];
}
