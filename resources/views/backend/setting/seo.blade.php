@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SEO Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">SEO Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">SEO Settings</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">SEO Settins</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            
      
    <div class="modal-body">
              
    
        <form method="POST" action="{{route('update.seo',$seo->id)}}">
                @csrf
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Meta Author</label>
                  <input type="text" class="form-control" value="{{$seo->meta_author}}" 
                  aria-describedby="emailHelp" name="meta_author">
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Meta Title</label>
                  <input type="text" class="form-control" value="{{$seo->meta_title}}" 
                  aria-describedby="emailHelp" name="meta_title">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Meta Keyword</label>
                  <input type="text" class="form-control" value="{{$seo->meta_keyword}}" 
                  aria-describedby="emailHelp" name="meta_keyword">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Meta description</label>
                  <input type="text" class="form-control" value="{{$seo->meta_description}}" 
                  aria-describedby="emailHelp" name="meta_description">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Google Analytics</label>
                  <input type="text" class="form-control" value="{{$seo->google_analytics}}" 
                  aria-describedby="emailHelp" name="google_analytics">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Google Verification</label>
                  <input type="text" class="form-control" value="{{$seo->google_verification}}" 
                  aria-describedby="emailHelp" name="google_verification">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alexa Analytics</label>
                  <input type="text" class="form-control" value="{{$seo->alexa_analytics}}" 
                  aria-describedby="emailHelp" name="alexa_analytics">
                </div>


                

                <button type="submit" class="btn btn-success btn-block">update</button>
        </form>
      
      
     </div>
            
    </div>
  </div>
    <!-- /.card-body -->
  </div>
{{-- category dded modal --}}




@endsection