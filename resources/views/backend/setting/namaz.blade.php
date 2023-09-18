@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Namaz Time Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Namaz Time Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Namaz Time Settings</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Namaz Time Settins</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            
      
    <div class="modal-body">
  
        <form method="POST" action="{{route('update.namaz',$namaz->id)}}">
                @csrf
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Fazar</label>
                  <input type="text" class="form-control" value="{{$namaz->fajar}}" 
                  aria-describedby="emailHelp" name="fajar">
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jahar</label>
                  <input type="text" class="form-control" value="{{$namaz->johor}}" 
                  aria-describedby="emailHelp" name="johor">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Ashor</label>
                  <input type="text" class="form-control" value="{{$namaz->ashor}}" 
                  aria-describedby="emailHelp" name="ashor">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Magrib</label>
                  <input type="text" class="form-control" value="{{$namaz->magrib}}" 
                  aria-describedby="emailHelp" name="magrib">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Asha</label>
                  <input type="text" class="form-control" value="{{$namaz->esha}}" 
                  aria-describedby="emailHelp" name="esha">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jummah</label>
                  <input type="text" class="form-control" value="{{$namaz->jummah}}" 
                  aria-describedby="emailHelp" name="jummah">
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