@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Social Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Social Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Social Settings</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Social Settins</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            
      
            <div class="modal-body">
              
      
              <form method="POST" action="{{route('update.social',$social->id)}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Facebook</label>
                  <input type="text" class="form-control" value="{{$social->facebook}}" 
                  aria-describedby="emailHelp" name="facebook">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                    <input type="text" class="form-control" value="{{$social->twitter}}" 
                    aria-describedby="emailHelp" name="twitter">
                </div>
                  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" value="{{$social->linkedin}}" 
                    aria-describedby="emailHelp" name="linkedin">
                </div>
                  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Youtube</label>
                    <input type="text" class="form-control" value="{{$social->youtube}}" 
                    aria-describedby="emailHelp" name="youtube">
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