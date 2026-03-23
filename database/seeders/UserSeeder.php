<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Defina',
                'npm' => '2407051023',
                'kelas_id' => Kelas::where('nama_kelas', 'A')->first()->id
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}