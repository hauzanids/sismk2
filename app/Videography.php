<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videography extends Model
{
    //
    protected $table='videography';
    protected $fillable =['judul','deskripsi','materi'];
}
