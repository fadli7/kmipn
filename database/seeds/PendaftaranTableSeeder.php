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
        $result = DB::table('tim')->insert([
            'users_id' => 1,
            'kategori_id' => 1,
            'nama_tim' => 'TIM',
            'asal_pt' => 'PENS',
            'total_anggota' => 0,
            'file_proposal'=> 'operasi linux word.docx',
            'status' => 'Daftar',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
