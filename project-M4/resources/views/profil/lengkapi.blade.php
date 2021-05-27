@extends('layout.admin')

@section('title')
    id kamu = {{ Auth::user()->id }}
@endsection


@section('content')

<form action="/profil" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">alamat</label>
        <input type="text" class="form-control" name="alamat" id="description"  placeholder="masukan alamat"></input>
        @error('alamat')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">umur</label>
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur"></input>
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="role">role</label>
        <input type="text" class="form-control" name="role" id="role" placeholder="Masukkan role"></input>
        @error('role')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
    <a href="/profil" class="btn btn-warning btn-sm">Kembali</a>
</form>

@endsection