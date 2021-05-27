@extends('layout.admin')
@section('title', 'Product List')

@section('content')
<table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Description</th>
    <th>Product Category</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
    @forelse ($product as $key=>$value)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->ProductCategories->name}}::{{$value->ProductCategories->description}}</td>
      <td>
        <div style="display: flex">
          <a class="btn btn-success" href="/product/{{$value->id}}" role="button">show</a>&nbsp;
          <a class="btn btn-warning" href="/product/{{$value->id}}/edit" role="button">edit</a>&nbsp;
          <form method="POST" action="/product/{{$value->id}}">
              @csrf
              @method('DELETE')
              &nbsp;<button type="submit" class="btn btn-danger">delete</button>
          </form>
      </div>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5">NO DATA</td>
    </tr>
    @endforelse
  
  </tbody>
  <tfoot>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Description</th>
    <th>Product Category</th>
    <th>&nbsp;</th>
  </tr>
  </tfoot>
</table>
<div class="row justify-content-center">
  <div class="col-md-auto mt-3">
      <a class="btn btn-primary" href="/product/create" role="button">Add Product</a>
  </div>
</div>
@endsection

@push('style')
<link rel="stylesheet" href="{{asset('hamas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('hamas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('hamas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('script')
<script src="{{asset('hamas/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('hamas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('hamas/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('hamas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush