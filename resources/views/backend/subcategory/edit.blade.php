@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SubCategories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">SubCategory</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">SubCategory modify</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">update Subcategory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            
      
            <div class="modal-body">
              
              <form method="POST" action="{{route('update.subcategory',$sub->id)}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">SubCategory Name Bangla</label>
                  <input type="text" class="form-control" value="{{$sub->subcategory_bn}}" name="subcategory_bn">
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">SubCategory Namke English</label>
                  <input type="text" class="form-control " value="{{$sub->subcategory_en}}" name="subcategory_en">
                  
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Choose Category</label>
                   <select name="category_id" class="form-control">
                    <option disabled="" selected="">--choose one--</option>
                    @foreach ($category as $row)
                        <option value="{{$row->id}}">{{$row->category_en}}|{{$row->category_bn}}</option>
                    @endforeach
        
                   </select>
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