<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sekolahs')->insert([
            'nm_skl'=>'smkn 2 purwakarta',
            'alamat'=>'Jl. Jend. A. Yani No. 98 Cipaisan Purwakarta',
            'pos'=>'41111',
            'npsn'=>'20229756',
            'telp_fax'=>'(0264) 200724',
            'email'=>'smkn2.purwakarta@gmail.com',
            'website'=>'https:://www.smkn2pwk.sch.id',
            'logo'=>'img/sekolah/RUaQZF7TGhdrxEeSBZkcgY26GhJe0NlUKWRuxJWC.png'
        ]);
    }
}
