<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $users = $this->userModel->getUser();
        return view('user-management', compact('users'));
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'judul' => 'Tambah User',
            'kelas' => $kelas
        ];
        return view('user-management-create', $data);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'name' => $request->input('name'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id')
        ]);

        return redirect()->route('user-management.index');
    }
}