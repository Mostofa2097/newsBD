@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">All Post</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Post Table</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Category</th>
          <th>SubCategory</th>
          <th>Title</th>
          <th>Tumbnale</th>
          <th>date</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($post as $row)
          <tr>
            <td>{{$row->category_bn}}</td>
            <td>{{$row->subcategory_bn}}</td>
            <td>{{$row->title_bn}}</td>
            <td><img src="{{URL::to($row->image)}}" style="height: 60px;width:60px"></td>
            <td>{{$row->post_date}}</td>

            <td>
              <a href="{{URL::to('edit/subcategory/'.$row->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
              <a href="{{URL::to('delete/post/'.$row->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></i></a>
            </td>
          </tr>
          @endforeach
        
       
        <tfoot>
          <tr>
            <th>Category</th>
          <th>SubCategory</th>
          <th>Title</th>
          <th>Tumbnale</th>
          <th>image</th>
          <th>date</th>
          <th>Action</th>
          </tr>
          </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
{{-- category dded modal --}}


  @endsection