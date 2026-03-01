<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([[
            'title'=>'Kegiatan Pesantren Ekologi ',
            'slug'=>'Kegiatan-Pesantren-Ekologi',
            'content'=>'Pesantren Ekologi mulai dilaksanakan pada bulan Ramahadhan Tahun ini (2026)',
            'position'=>'slider',
            'image'=>'img/post/EASjlbsKVeh8Bsb7IshnNXcXt8Af33VqNa2N5KOv.jpg',
            'category_id'=>'1',
            'created_at'=>Carbon::now(),
        ],
        [   'title'=>'Sholat Duha Bersama ',
            'slug'=>'Sholat-Duha-Bersama',
            'content'=>'Pesantren Ekologi mulai dilaksanakan pada bulan Ramahadhan Tahun ini (2026)',
            'position'=>'headline',
            'image'=>'img/post/EASjlbsKVeh8Bsb7IshnNXcXt8Af33VqNa2N5KOv.jpg',
            'category_id'=>'1',
            'created_at'=>Carbon::now()],
        [  'title'=>'Pembukaan Pesantren Ekologi ',
            'slug'=>'Pembukaan-Pesantren-Ekologi',
            'content'=>'Pesantren Ekologi mulai dilaksanakan pada bulan Ramahadhan Tahun ini (2026)',
            'position'=>'latest',
            'image'=>'img/post/EASjlbsKVeh8Bsb7IshnNXcXt8Af33VqNa2N5KOv.jpg',
            'category_id'=>'1',
            'created_at'=>Carbon::now()]]);
    }
}
