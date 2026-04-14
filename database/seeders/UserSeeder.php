<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'id' => (string) Str::uuid(),
                'name' => 'Defina',
                'npm' => '2407051023',
                'email' => 'defina@gmail.com',
                'password' => Hash::make('password'),
                'kelas_id' => Kelas::where('nama_kelas', 'A')->first()->id
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $dosen = User::firstOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'DosenIlkomp',
                'npm' => '1234567890',
                'password' => Hash::make('password'),
                'kelas_id' => Kelas::where('nama_kelas', 'B')->first()->id
            ]
        );
        $dosen->assignRole('dosen');

        User::firstOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'MahasiswaIlkomp',
                'npm' => '1234567891',
                'password' => Hash::make('password'),
                'kelas_id' => Kelas::where('nama_kelas', 'A')->first()->id
            ]
        );
    }
}