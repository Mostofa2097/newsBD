@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">subdistrict</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">subdistrict</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">subdistrict modify</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add Category</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body col-lg-8">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">update subdistrict</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            
      
            <div class="modal-body">
              
              <form method="POST" action="{{route('update.subdistrict',$sub->id)}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">subdistrict Name Bangla</label>
                  <input type="text" class="form-control" value="{{$sub->subdistrict_bn}}" name="subdistrict_bn">
                 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">subdistrict Namke English</label>
                  <input type="text" class="form-control " value="{{$sub->subdistrict_en}}" name="subdistrict_en">
                  
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Choose district</label>
                   <select name="district_id" class="form-control">
                    <option disabled="" selected="">--choose one--</option>
                    @foreach ($district as $row)
                        <option value="{{$row->id}}">{{$row->district_en}}|{{$row->district_bn}}</option>
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