<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $fillable=[
	'dokter',
	'usia',
	'spesialis',
	'alamat'
   ];
}
