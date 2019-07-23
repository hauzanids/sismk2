<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistemkomputer extends Model
{
    //
    protected $table='sistemkomputer';
    protected $fillable =['judul','deskripsi','materi'];
}
