@extends('layout.admin')
@section('title', 'Product Create')

@section('content')
<div class="row">
    <form method="POST" action="/product/{{$product->id}}">
        @csrf
        @method('PUT');
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="{{$product->name}}">
          @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
          <small id="emailHelp" class="form-text text-muted">masukan nama</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
          @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
          <small id="emailHelp" class="form-text text-muted">masukan deskripsi</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Produk Kategori</label>
          <select class="custom-select custom-select-sm" id="productCategory" name="productCategory">
            <option value="{{ $product->ProductCategories->id }}"  selected>{{ $product->ProductCategories->name }}::{{ $product->ProductCategories->description }}</option>
            @foreach ($productCat as $item)
                <option value="{{ $item->id }}">{{ $item->description }}::{{ $item->description }} </option>
            @endforeach
          </select>
          @error('productCategory')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
          <small id="emailHelp" class="form-text text-muted">masukan kategori produk</small>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-primary" href="/product" role="button">Kembali</a>
      </form>
</div>
@endsection