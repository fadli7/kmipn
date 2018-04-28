<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->enum('jenis_kelamin', array('Laki-laki', 'Perempuan'))->nullable();
            $table->string('asal_pt')->nullable();
            $table->string('nama_tim')->nullable();
            $table->text('jurusan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telp', 20)->nullable();
            $table->enum('kategori', array('Cipta Inovasi', 'Bisnis TIK', 'Game Development', 'E-Goverment','IoT','Desain Animasi','Keamanan Jaringan','Hackathon'))->nullable();
            $table->enum('role', array('admin', 'member'))->default('member');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
