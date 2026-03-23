@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>User Management</h1>
    <p>Ini adalah halaman user management</p>

    <table class="table table-bordered" style="width: 50%;">
        <tr style="background-color: #0000ff; color: white;">
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->npm }}</td>
            <td>{{ $user->nama_kelas }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection