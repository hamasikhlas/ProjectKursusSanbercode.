@extends('layout.admin')

@section('title')
    Tambah Data Cast
@endsection

@section('content')

<div>
        
            @csrf
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="nama" id="title" placeholder="Masukkan Nama">
                <label for="title">Umur</label>
                <input type="text" class="form-control" name="umur" id="title" placeholder="Masukkan Nama">
                <label for="title">Biodata</label>
                <input type="text" class="form-control" name="bio" id="title" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection