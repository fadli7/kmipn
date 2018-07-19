<?php

use Illuminate\Database\Seeder;

class PoliteknikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array('Politeknik Manufaktur Bandung', 
        'Politeknik Negeri Jakarta', 
        'Politeknik Negeri Medan', 
        'Politeknik Negeri Bandung', 
        'Politeknik Negeri Semarang', 
        'Politeknik Negeri Sriwijaya', 
        'Politeknik Negeri Lampung', 
        'Politeknik Negeri Ambon', 
        'Politeknik Negeri Padang', 
        'Politeknik Negeri Bali', 
        'Politeknik Negeri Pontianak',
        'Politeknik Negeri Ujung Pandang',
        'Politeknik Negeri Manado',
        'Politeknik Perkapalan Negeri Surabaya',
        'Politeknik Negeri Banjarmasin',
        'Politeknik Negeri Lhokseumawe',
        'Politeknik Negeri Kupang',
        'Politeknik Elektronik Negeri Surabaya',
        'Politeknik Negeri Jember',
        'Politeknik Pertanian Negeri Pangkajene Kepulauan',
        'Politeknik Pertanian Negeri Kupang',
        'Politeknik Perikanan Negeri Tual',
        'Politeknik Negeri Malang',
        'Politeknik Pertanian Negeri Samarinda',
        'Politeknik Pertanian Negeri Payakumbuh',
        'Politeknik Negeri Samarinda',
        'Politeknik Negeri Media Kreatif',
        'Politeknik Manufaktur Negeri Bangka Belitung',
        'Politeknik Negeri Batam',
        'Politeknik Negeri Nusa Utara',
        'Politeknik Negeri Bengkalis',
        'Politeknik Negeri Balikpapan',
        'Politeknik Negeri Madura',
        'Politeknik Maritim Negeri Indonesia',
        'Politeknik Negeri Banyuwangi',
        'Politeknik Negeri Madiun',
        'Politeknik Negeri Fakfak',
        'Politeknik Negeri Sambas',
        'Politeknik Negeri Tanah Laut',
        'Politeknik Negeri Subang',
        'Politeknik Negeri Ketapang',
        'Politeknik Negeri Cilacap',
        'Politeknik Negeri Indramayu');
        
        foreach($data as $item)
        {
            $result = DB::table('politeknik')->insert([
                'politeknik' => $item,
            ]);
        }
    }
}
