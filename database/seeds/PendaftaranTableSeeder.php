<?php

use Illuminate\Database\Seeder;

class PendaftaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('pendaftaran')->insert([
            'users_id' => 2,
            'fullname2' => 'Anggota2',
            'no_mahasiswa2' => 2103171036,
            'email2' => 'member2@kmipn.com',
            'jenis_kelamin2' => 'Laki-laki',
            'jurusan2' => 'IT',
            'tempat_lahir2' => 'Surabaya',
            'tgl_lahir2' => new DateTime,
            'alamat2' => 'Surabaya',
            'no_telp2' => '0895337348558',
            'fullname3' => 'Anggota3',
            'no_mahasiswa3' => 2103171036,
            'email3' => 'member3@kmipn.com',
            'jenis_kelamin3' => 'Laki-laki',
            'jurusan3' => 'IT',
            'tempat_lahir3' => 'Surabaya',
            'tgl_lahir3' => new DateTime,
            'alamat3' => 'Surabaya',
            'no_telp3' => '0895337348558',
            'fullname4' => 'Anggota4',
            'no_mahasiswa4' => 2103171036,
            'email4' => 'member4@kmipn.com',
            'jenis_kelamin4' => 'Laki-laki',
            'jurusan4' => 'IT',
            'tempat_lahir4' => 'Surabaya',
            'tgl_lahir4' => new DateTime,
            'alamat4' => 'Surabaya',
            'no_telp4' => '0895337348558',
            'file_proposal'=> 'operasi linux word.docx',
            'status' => 'Tahap Seleksi',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
