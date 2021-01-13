@extends('layouts.admin.app')
@push('css')
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>

@endpush
@section('main-content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Add New Category
      </h1>
     {{--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            @if(count($errors) > 0)
                 @foreach($errors->all() as $error)
                   <p class="alert alert-danger">{{ $error }}</p>
                 @endforeach   

             @endif

    <div class="row">
          <div class="col-md-2">
            
          </div>
          <div class="col-md-8">
        
<form role="form" action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="cat_title">Category Name</label>
                  <input type="text" class="form-control" id="cat_title" name="name" placeholder="Category Title">
                </div>

                <div class="form-group">
                  <label for="cat_slug">Category Slug</label>
                  <input type="text" class="form-control" id="cat_slug" name="slug" placeholder="Category Slug">
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Category</button>
                <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
              </div>
                
              </div>
          
        </div>

    </form>
   </div>
   <div class="col-md-2">
    
  </div>

     </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection