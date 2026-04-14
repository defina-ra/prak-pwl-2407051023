<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MataKuliahSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            KelasSeeder::class,
            UserSeeder::class,
            MataKuliahSeeder::class,
        ]);
    }
}