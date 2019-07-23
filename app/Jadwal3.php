<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal3 extends Model
{
    //
    protected $table='jadwal3';
    protected $fillable =['jammulai','jamselesai','senin','selasa','rabu','kamis','jumat'];
}
