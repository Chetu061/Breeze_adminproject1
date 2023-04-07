@extends('layouts.master')
@section('content')



<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Category</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                <h3 class="card-title">Category Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{route('category.update',$cate->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" 
                    value="{{$cate->title}}"
                    placeholder="Enter Title">
                  </div>
                 
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" aria-describedby="image"  class="form-control"
                    id="image" name="image" value="{{$cate->image}}">
                  </div>
                 
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="status">Status Type<span class="text-danger">
                            *</span></label>
                    <select class="form-control" name="status"value="{{$cate->status}}">
                        <option value="">Select status Type</option>
                        <option value="0">Active</option>
                        <option value="1">Deactive</option>
                    </select>
                  
                </div>  
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      {{--<!-- /.container-fluid --> --}}
    </section>
    <!-- /.content -->
  
@endsection