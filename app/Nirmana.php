<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nirmana extends Model
{
    //
    protected $table='nirmana';
    protected $fillable =['judul','deskripsi','materi'];
}
