<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = [
            [
            'nama' => 'Defina',
            'npm' => '2407051023',
            'jurusan'=> 'Ilmu Komputer',
            'prodi' => 'D3 Manajemen Informatika'
            ],
            [
            'nama' => 'Adel',
            'npm' => '2407051024',
            'jurusan'=> 'Ilmu Komputer',
            'prodi' => 'D3 Manajemen Informatika'
            ],
            [
            'nama' => 'zulfa',
            'npm' => '2407051006',
            'jurusan'=> 'Ilmu Komputer',
            'prodi' => 'D3 Manajemen Informatika'
            ]
        ];
        return view('user-managment', compact('users'));
    }
}