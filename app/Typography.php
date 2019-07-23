<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typography extends Model
{
    //
    protected $table='typography';
    protected $fillable =['judul','deskripsi','materi'];
}
