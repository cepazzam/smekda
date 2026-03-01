<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('sliders')->insert([
            'title'=>'smkn 2 purwakarta',
            'textpos'=>'text-start',
            'content'=>'smkn 2 purwakarta',
            'image'=>'img/slider/33PE99B9SHdHhyCRGefPz1neJpbETtacRrYzPdqn.jpg'
        ]);
    }
}
