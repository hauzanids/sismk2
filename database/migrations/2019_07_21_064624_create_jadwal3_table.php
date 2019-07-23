<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwal3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('jammulai');
            $table->time('jamselesai');
            $table->string('senin');
            $table->string('selasa');
            $table->string('rabu');
            $table->string('kamis');
            $table->string('jumat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal3');
    }
}
