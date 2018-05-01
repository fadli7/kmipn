<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('kategori', array('Cipta Inovasi', 'Bisnis TIK', 'Game Development', 'E-Goverment','IoT','Desain Animasi','Keamanan Jaringan','Hackathon'))->nullable();
            $table->text('pengumuman');
            $table->text('deskripsi');
            $table->text('peraturan');
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
        Schema::dropIfExists('lomba');
    }
}
