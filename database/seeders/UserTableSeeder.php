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
            'roles' => 1,
            'name' => 'Aizan',
            'email' => 'aizan@gmail.com',
            'password' => bcrypt('password'),
            'status' => 'active',
        ]);
    }
}
