@extends('layout.admin')

@section('title')
    <h4>halaman Edit Data</h4>
@endsection


@section('content')
<form action="/produk_categories/{{ $post->id }}" method="POST">
    @csrf
    @method('put')
         <div class= "container">
             <div class = "row">
                 <div class = "col-md-8">
                 <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name= "name" value = "{{ $post->name }}" class="form-control" id="name" aria-describedby="emailHelp">
                     @error('name')
                     <div class="alert alert-danger">
                         {{ $message }}
                     </div>
                      @enderror
                 </div>
                 <div class="form-group">
                     <label for="description">description</label>
                     <input type="text" name = "description" value = "{{ $post->description }}" class="form-control" id="description">
                     @error('description')
                     <div class="alert alert-danger">
                         {{ $message }}
                     </div>
                 @enderror
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">image url</label>
                     <input type="text" name = "image_url" value = "{{ $post->image_url }}" class="form-control" id="image_url">
                     @error('image_url')
                     <div class="alert alert-danger">
                         {{ $message }}
                     </div>
                     @enderror
                 </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">image description</label>
                    <input type="text" name = "image_description" value = "{{ $post->image_description }}" class="form-control" id="image_description">
                    @error('image_description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                 
                 <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                 <a href="/produk_categories" class = "btn btn-danger btn-sm">Kembali</a>
                 </div>
             </div>
         </div>
    </form>
@endsection