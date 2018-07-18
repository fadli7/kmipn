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
        $result = DB::table('politeknik')->insert([
            'politeknik' => 'PENS',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
