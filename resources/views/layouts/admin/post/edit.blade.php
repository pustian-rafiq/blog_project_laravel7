@extends('layouts.admin.app')

@push('css')
 

@endpush
@section('main-content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
     <div class="container-fluid">
      
      @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
         @endforeach   

      @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Post</h1>
          </div>
          <div class="col-sm-6">
           {{--  <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Form</li>
            </ol> --}}
            <a href="{{ route('post.index') }}" class="btn btn-success float-right">Back</a>

          </div>
        </div>
        
 <form role="form" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')    	 
  <div class="card card-primary">
  
  <div class="card-body">

   <div class="row">
      <div class="col-md-6">	
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
          </div>
          <div class="form-group">
            <label for="sub_title">Sub Title</label>
            <input type="text" name="sub_title" class="form-control" id="sub_title" value="{{ $post->sub_title }}">
          </div>

           <div class="form-group">
            <label for="slug">Post Slug </label>
            <input type="text" name="slug" class="form-control" id="slug" value="{{ $post->slug }}">
          </div>

    </div>
   <div class="col-md-6">
      <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          
          {{-- Check if it is published or not --}}
          <div class="form-check">
            <input type="checkbox" name="status" class="form-check-input" id="status" 
            @if($post->status == 1) checked @endif>
            <label class="form-check-label" for="status">Approve</label>
          </div>
  </div>
 </div>

                  
 </div>
 
      <div class="row"  >
        <div class="col-md-12">
          
            <div class="card-body pad">
              <div class="mb-3">
                <textarea name="body" class="textarea" placeholder="Text" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {{ $post->body}}
                          	
                 </textarea>
                          
              </div>
           
             
            </div>
          </div>
        </div>
  
  <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update Post</button>
      </div>
  </div>
  </form>
   

      </div><!-- /.container-fluid -->
    </section>
      
  </div>
  <!-- /.content-wrapper -->
@endsection
@push('js')
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>

@endpush