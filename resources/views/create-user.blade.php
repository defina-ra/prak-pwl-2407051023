@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')

<h1>Tambah User</h1>

<form action="{{ route('user-management.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" class="form-control" id="npm" name="npm" required>
    </div>

    <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas</label>
        <select class="form-select" id="kelas_id" name="kelas_id" required>
            @foreach ($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="{{ route('user-management.index') }}" class="btn btn-secondary">Batal</a>
</form>

@endsection