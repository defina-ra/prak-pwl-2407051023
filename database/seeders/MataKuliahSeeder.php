<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
            [
                'nama_mk' => 'Pemrograman Web Lanjut',
                'sks' => 3
            ],
            [
                'nama_mk' => 'Pemrograman Mobile',
                'sks' => 3
            ],
            [
                'nama_mk' => 'Pemrograman Desktop',
                'sks' => 2
            ]
        ]);
    }
}