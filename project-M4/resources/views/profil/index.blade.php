@extends('layout.admin')

@section('title')
    <h4>halaman profil dari {{ Auth::user()->name }}</h4>
@endsection

@section('content')
   @if ( $profil != null)
    
   <div class="alert alert-primary">
    <p>  nama = {{ $profil->user->name }}</p>
    <p> email = {{ $profil->user->email }}</p>
    <p>alamat = {{ $profil->alamat }}</p>
    <p>umur = {{ $profil->umur }}</p>
    <p>role = {{ $profil->role }}</p>
   </div>
   <h4>silakan edit di bawah</h4>
   <form action="/profil/{{ $profil->id }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" class="form-control" name="nama" value="{{ $profil->nama }}" id="nama" placeholder="Masukkan nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">alamat</label>
        <input type="text" class="form-control" name="alamat" value="{{ $profil->alamat }}" id="description"  placeholder="masukan alamat"></input>
        @error('alamat')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">umur</label>
        <input type="text" class="form-control" value="{{ $profil->umur }}" name="umur" id="umur" placeholder="Masukkan umur"></input>
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="role">role</label>
        <input type="text" class="form-control" name="role" value="{{ $profil->role }}" id="role" placeholder="Masukkan role"></input>
        @error('role')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-sm">ubah</button>
    <a href="/produk_categories" class="btn btn-warning btn-sm">Kembali</a>
</form>

      
   @else
   <h5>Lengkapi Data Anda Terlebih Dahulu</h5>
   <a href="/profil/lengkapi" class="btn btn-primary btn-sm">Lengkapi</a>
   @endif

@endsection