<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            //Anggota Kelompok2
            $table->string('fullname2')->nullable();
            $table->string('email2')->nullable();
            $table->enum('jenis_kelamin2', array('Laki-laki', 'Perempuan'))->nullable();
            $table->text('jurusan2')->nullable();
            $table->string('tempat_lahir2')->nullable();
            $table->date('tgl_lahir2')->nullable();
            $table->text('alamat2')->nullable();
            $table->string('no_telp2', 20)->nullable();
            //Anggota Kelompok3
            $table->string('fullname3')->nullable();
            $table->string('email3')->nullable();
            $table->enum('jenis_kelamin3', array('Laki-laki', 'Perempuan'))->nullable();
            $table->text('jurusan3')->nullable();
            $table->string('tempat_lahir3')->nullable();
            $table->date('tgl_lahir3')->nullable();
            $table->text('alamat3')->nullable();
            $table->string('no_telp3', 20)->nullable();
            //Anggota Kelompok4
            $table->string('fullname4')->nullable();
            $table->string('email4')->nullable();
            $table->enum('jenis_kelamin4', array('Laki-laki', 'Perempuan'))->nullable();
            $table->text('jurusan4')->nullable();
            $table->string('tempat_lahir4')->nullable();
            $table->date('tgl_lahir4')->nullable();
            $table->text('alamat4')->nullable();
            $table->string('no_telp4', 20)->nullable();
            //Anggota Kelompok5
            $table->string('fullname5')->nullable();
            $table->string('email5')->nullable();
            $table->enum('jenis_kelamin5', array('Laki-laki', 'Perempuan'))->nullable();
            $table->text('jurusan5')->nullable();
            $table->string('tempat_lahir5')->nullable();
            $table->date('tgl_lahir5')->nullable();
            $table->text('alamat5')->nullable();
            $table->string('no_telp5', 20)->nullable();

            $table->text('file_proposal')->nullable();
            $table->enum('kategori', array('Cipta Inovasi', 'Bisnis TIK', 'Game Development', 'E-Goverment','IoT','Desain Animasi','Keamanan Jaringan','Hackathon'))->nullable();
            $table->enum('status', array('Daftar', 'Tahap Seleksi', 'Lolos', 'Tidak Lolos'))->default('Daftar');
            $table->softDeletes();
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
        Schema::dropIfExists('pendaftaran');
    }
}
