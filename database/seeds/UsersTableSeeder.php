<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('users')->insert([
            'fullname' => 'admin',
            'email' => 'admin@kmipn.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'admin',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'fullname' => 'member',
            'email' => 'member@kmipn.com',
            'password' => \Hash::make('sandiaman'),
            'nama_tim' => 'TIM',
            'asal_pt' => 'PENS',
            'jenis_kelamin' => 'Laki-laki',
            'jurusan' => 'IT',
            'alamat' => 'Surabaya',
            'tempat_lahir' => 'Surabaya',
            'tgl_lahir' => new DateTime,
            'asal_pt' => 'PENS',
            'no_telp' => '0895337348558',
            'kategori' => 'Bisnis TIK',
            'role' => 'member',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
