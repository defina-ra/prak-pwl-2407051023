<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id' => (string) Str::uuid(),
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
