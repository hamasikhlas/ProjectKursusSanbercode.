@extends('layout.admin')
@section('title', 'Product Show')

@section('content')
<div class="row">
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" value="{{$product->name}}" disabled>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <input type="text" class="form-control" value="{{$product->description}}" disabled>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Produk Kategori</label>
          <select class="custom-select custom-select-sm">
            <option value="{{$product->ProductCategories->id}}">{{$product->ProductCategories->name}}::{{$product->ProductCategories->description}}</option>
          </select>
        </div>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{$product->ProductImages->image_url}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{$product->ProductImages->image_description}}</p>
          </div>
        </div>
        <a class="btn btn-primary" href="/product" role="button">Kembali</a>
      </form>
</div>
@endsection