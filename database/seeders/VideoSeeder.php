<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            'title'=>'smkn 2 purwakarta',
            'embed'=> 'CZH2Cj_Gpyc'
        ]);
    }
}
