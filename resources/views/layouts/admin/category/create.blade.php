@extends('layouts.admin.app')

@section('main-content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Add New Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            {{-- <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div> --}}

  
        
<form role="form" action=" " method="post">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="cat_title">Category title</label>
                  <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Category Title">
                </div>

                <div class="form-group">
                  <label for="cat_slug">Category Slug</label>
                  <input type="text" class="form-control" id="cat_slug" name="cat_slug" placeholder="Category Slug">
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Category</button>
                <a href='' class="btn btn-warning">Back</a>
              </div>
                
              </div>
          
        </div>

    </form>
   

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