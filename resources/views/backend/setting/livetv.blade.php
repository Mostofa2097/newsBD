@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LIVE TV Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">LIVE TV Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LIVE TV Settings</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">LIVE TV Settins</h4>
              @if ($livetv->status == 1)
              <a href="{{route('deactive.livetv',$livetv->id)}}" style="float:right"class="btn btn-danger">Deactive</a> 
              @else 
              <a href="{{route('active.livetv',$livetv->id)}}" style="float:right"class="btn btn-success">Active</a>
              @endif
             
            </div>
      
            
      
    <div class="modal-body">
  
        <form method="POST" action="{{route('update.livetv',$livetv->id)}}">
                @csrf
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">embed_code</label>
                  <textarea type="text" class="form-control" 
                  aria-describedby="emailHelp" name="embed_code">{{$livetv->embed_code}} </textarea>
                  @if ($livetv->status == 1)
                  <small class="text-success">Now Live TV are Active</small> 
                  @else 
                  <small class="text-danger">Now Live TV are Deactive</small>
                  @endif
                 
                </div>
                
                {{-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">status</label>
                  <input type="text" class="form-control" value="{{$livetv->status}}" 
                  aria-describedby="emailHelp" name="status">
                </div>
                 --}}

                <button type="submit" class="btn btn-success btn-block">update</button>
        </form>
      
      
     </div>
            
    </div>
  </div>
    <!-- /.card-body -->
  </div>
{{-- category dded modal --}}




@endsection