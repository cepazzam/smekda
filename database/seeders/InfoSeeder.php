<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('infos')->insert([[
        'title'=>'Sambutan',
        'image'=>'img/info/dsFxkJwRYaF0yady05jCBdF1G8Prp4dq8hvR0h0g.jpg',
        'content'=>'contoh content smbutan',
        'kategori'=>'sambutan'
      ],
      [
        'title'=>'Sambutan',
        'image'=>'img/info/dsFxkJwRYaF0yady05jCBdF1G8Prp4dq8hvR0h0g.jpg',
        'content'=>'contoh content smbutan',
        'kategori'=>'artikel'
      
      ],
      [
        'title'=>'Sambutan',
        'image'=>'img/info/dsFxkJwRYaF0yady05jCBdF1G8Prp4dq8hvR0h0g.jpg',
        'content'=>'contoh content smbutan',
        'kategori'=>'pengumuman'
      ]]);
    }
}
