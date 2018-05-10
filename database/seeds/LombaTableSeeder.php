<?php

use Illuminate\Database\Seeder;

class LombaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('lomba')->insert([
            'kategori' => 'Cipta Inovasi',
            'pengumuman' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa sunt autem voluptate perspiciatis obcaecati itaque, eos porro dolores odio excepturi. Optio deserunt esse a eum, cumque ducimus sed nulla!',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa sunt autem voluptate perspiciatis obcaecati itaque, eos porro dolores odio excepturi. Optio deserunt esse a eum, cumque ducimus sed nulla!',
            'peraturan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa sunt autem voluptate perspiciatis obcaecati itaque, eos porro dolores odio excepturi. Optio deserunt esse a eum, cumque ducimus sed nulla!',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
