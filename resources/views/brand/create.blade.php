@extends('layouts.master')
@section('content')



<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Brand</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Brand</a></li>
        <li class="breadcrumb-item active">Dashboard </li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Brand Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if ($errors->any())
              <div class="alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
            </ul>
            </div>
            @endif
            <form id="quickForm" action="{{route('brand.store')}}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}"id="exampleInputEmail1" 
                    placeholder="Enter name">
                  </div>
    
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Enter User</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="user_id" value="{{old('user_id')}}">
                         @foreach($user as $pro)
                      <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endforeach 
                    </select>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Choose Product</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="product_id" value="{{old('product_id')}}">
                         @foreach($product as $pro)
                      <option value="{{$pro->id}}">{{$pro->title}}</option>
                        @endforeach 
                    </select>
                  </div><!--end dropdown-->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
   </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column --></div>
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection