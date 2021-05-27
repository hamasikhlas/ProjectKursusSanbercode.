@extends('layout.admin')
@section('title', 'Contact Us Show')

@section('content')
<div class="row">
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" value="{{$contact->name}}" disabled>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" value="{{$contact->email}}" disabled>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone Number</label>
          <input type="text" class="form-control" value="{{$contact->phone_number}}" disabled>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" disabled></textarea>
        </div>
        <a class="btn btn-primary" href="/product" role="button">Kembali</a>
      </form>
</div>
@endsection