<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    //
    protected $table='informasi';
    protected $fillable =['judul','deskripsi','gambar','tanggal'];
    protected $dates = ['tanggal'];
}
