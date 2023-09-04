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
      <h3 class="card-title">subdistrict Table</h3>
      <button class="btn btn-danger btn-sm" style="float: right;" data-toggle="modal" data-target="#modal-default">Add subdistrict</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SubDistrict Name Bangla</th>
          <th>SubDistrict Name English</th>
          <th>district</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($sub as $row)
          <tr>
            <td>{{$row->subdistrict_bn}}</td>
            <td>{{$row->subdistrict_en}}</td>
            <td>{{$row->district_bn}}</td>
            
            <td>
              <a href="{{URL::to('edit/subdistrict/'.$row->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
              <a href="{{route('delete.subdistrict',$row->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
        <h4 class="modal-title">Insert new subdistrict</h4>
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
        

        <form method="POST" action="{{route('store.subdistrict')}}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">SubDistrict Name Bangla</label>
            <input type="text" class="form-control @error('subdistrict_bn') is-invalid @enderror" id="bangla" aria-describedby="emailHelp" name="subdistrict_bn">
            @error('subdistrict_bn')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">SubDistrict Name English</label>
            <input type="text" class="form-control @error('subdistrict_en') is-invalid @enderror" id="english" name="subdistrict_en">
            @error('subdistrict_en')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Choose District</label>
           <select name="district_id" class="form-control">
            <option disabled="" selected="">--choose one--</option>
            @foreach ($district as $row)
                <option value="{{$row->id}}">{{$row->district_en}}|{{$row->district_bn}}</option>
            @endforeach

           </select>
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