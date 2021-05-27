@extends('layout.admin')
@section('title', 'Contact Us List')

@section('content')
<table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
    @forelse ($contact as $key=>$value)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->phone_number}}</td>
      <td>
        <div style="display: flex">
          <a class="btn btn-success" href="/contactus/{{$value->id}}" role="button">show</a>&nbsp;
          <form method="POST" action="/contactus/{{$value->id}}">
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
    <th>Email</th>
    <th>Phone Number</th>
    <th>&nbsp;</th>
  </tr>
  </tfoot>
</table>
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