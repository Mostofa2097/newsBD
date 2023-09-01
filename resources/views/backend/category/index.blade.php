@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Category Table</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Category Name Bangla</th>
          <th>Category Name English</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($category as $row)
          <tr>
            <td>{{$row->category_bn}}</td>
            <td>{{$row->category_en}}</td>
            
            <td>
              <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
              <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        
       
        <tfoot>
          <tr>
            <th>Category Name Bangla</th>
            <th>Category Name English</th>
            <th>Action</th>
          </tr>
          </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
{{-- category dded modal --}}


<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Insert new category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
     @endif

      <div class="modal-body">
        

        <form method="POST" action="{{route('store.category')}}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name Bangla</label>
            <input type="text" class="form-control @error('category_bn') is-invalid @enderror" id="bangla" aria-describedby="emailHelp" name="category_bn">
            @error('category_bn')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Category Namke English</label>
            <input type="text" class="form-control @error('category_bn') is-invalid @enderror" id="english" name="category_en">
            @error('category_en')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>


      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

  @endsection