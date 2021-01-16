@extends('layouts.admin.app')
@push('css')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

  @endpush
@section('main-content')
		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tag Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tag Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       <div class="card">
              <div class="card-header">
                <a href="{{ route('tag.create') }}" class="btn btn-success">Add New Tag</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SL No.</th>
                    <th>Tag Name</th>
                    <th>Tag Slug</th>
                    <th>Action</th>
                     
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $key=>$tag)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $tag->name }}</td>
                      <td>{{ $tag->slug }}</td>
                      <td> 
                         <a class="btn btn-primary" href="{{route('tag.edit',$tag->id) }}" title="edit">
                           <i class="nav-icon fas fa-edit"></i></a>
                           
                           <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('post.destroy',$tag->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>

                        <a href="" class="btn btn-danger" title="delete"

                        onclick="
                          if(confirm('Are you sure to Delete?")) {
                          event.preventDefault();
                          window.getElementById('delete-form-{{ $tag->id }}').submit();
                        }else{
                        event.preventDefault();
                      } 
                      "> <i class="nav-icon fas fa-trash"></i>
                    </a> 

                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>SL No.</th>
                     <th>Tag Name</th>
                     <th>Tag Slug</th>
                     <th>Action</th>
                  </tr>
                  </tfoot>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  </div>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@push('js')
<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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