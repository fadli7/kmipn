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
            'role' => 'member',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
