<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal1 extends Model
{
    //
    protected $table='jadwal1';
    protected $fillable =['jammulai','jamselesai','senin','selasa','rabu','kamis','jumat'];
}
