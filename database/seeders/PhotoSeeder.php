<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert([
            'caption'=>'smkn 2 purwakarta',
            'image'=>'img/galeri/1uQhSuJKBjNrruqSbl56NA7YnAbRsr3jU2pe1VX0.png'
        ]);
    }
}
