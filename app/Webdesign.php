<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webdesign extends Model
{
    //
    protected $table='webdesign';
    protected $fillable =['judul','deskripsi','materi'];
}
