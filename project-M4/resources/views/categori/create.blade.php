@extends('layout.admin')


@section('title')
    <h4>Tambah Data Produk kategori</h4>
@endsection

@section('content')

<form action="/produk_categories" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama kategori</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan name">
        @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="descriptioin">description</label>
        <textarea type="text" class="form-control" name="description" id="description" placeholder="Masukkan description" cols="30" rows="10"></textarea>
        @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image_url">image url</label>
        <textarea type="text" class="form-control" name="image_url" id="image_url" placeholder="Masukkan image_url" cols="30" rows="10"></textarea>
        @error('image_url')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image_description">image description</label>
        <textarea type="text" class="form-control" name="image_description" id="image_description" placeholder="Masukkan image description" cols="30" rows="10"></textarea>
        @error('image_description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
    <a href="/produk_categories" class="btn btn-warning btn-sm">Kembali</a>
</form>
    
@endsection