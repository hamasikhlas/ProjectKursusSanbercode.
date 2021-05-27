@extends('layout.admin')


@section('title')
    <h4>katogori produk</h4>
@endsection


@section('content')
    <a href="/produk_categories/create" class="btn btn-primary btn-sm mb-3">Tambah Produk Baru</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>description</th>
                <th>image url</th>
                <th>image description</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $ct => $value)
            <tr>
                <td>{{ $ct + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                <td>
                    <img src="{{ $value->image_url }}" alt="" width="100">
                </td>
                <td>{{ $value->image_description }}</td>
                <td>
                    <form action="/produk_categories/{{ $value->id }}" method="POST">
                        <a href="/produk_categories/{{ $value->id }}" class="btn btn-warning btn-sm">Update</a>
                        @csrf
                         @method('DELETE')
                         <input type="submit" class="btn btn-primary btn-sm" value="Delete">
                        
                    </form>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection