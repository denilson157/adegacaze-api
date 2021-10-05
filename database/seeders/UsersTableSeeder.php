<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Denílson Pereira',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('A3154868e@'),
            'birthday' => '1998-12-27',
            'cellphone' => 960440279,
            'isAdmin' => true
        ]);
    }
}
