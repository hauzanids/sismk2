<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
    //
    protected $table='photography';
    protected $fillable =['judul','deskripsi','materi'];
}
