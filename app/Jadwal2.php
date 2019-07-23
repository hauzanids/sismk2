<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal2 extends Model
{
    //
    protected $table='jadwal2';
    protected $fillable =['jammulai','jamselesai','senin','selasa','rabu','kamis','jumat'];
}
