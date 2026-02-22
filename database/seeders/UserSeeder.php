<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
            'name'=>'Cep Azzam',
            'email'=>'admin@gmail.com',
            'is_role'=>'1',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);
    }
}
