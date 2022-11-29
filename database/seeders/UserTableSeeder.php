<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'roles_id' => 1,
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'active',
        ]);

        DB::table('users')->insert([
            'roles_id' => 2,
            'nama' => 'Aizan',
            'email' => 'Aizan@gmail.com',
            'password' => bcrypt('Aizan'),
            'status' => 'inactive',
        ]);
    }
}
