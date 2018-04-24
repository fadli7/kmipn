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
            'name' => 'admin',
            'email' => 'admin@kmipn.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'admin',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@kmipn.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'member',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
