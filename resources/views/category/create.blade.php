@extends('layouts.master')
@section('content')



<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Category</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Category_Form </li>
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
                <h3 class="card-title">Category Form</h3>
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
           <form id="quickForm" action="{{route('category.store')}}" method="post"enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}"id="exampleInputEmail1" 
                    placeholder="Enter Title">
                  </div>
                 
                  <div class="form-group">
                    <label for="image">Choose Image</label>
                    <input type="file" aria-describedby="image"  class="form-control" 
                    id="image" name="image" >
                  </div>

                 <div class="form-group">
                    <label class="form-label" for="status"> Choose Status
                      </label><span class="text-danger">
                        *</span>
                    <select class="form-control" name="status" value="{{old('status')}}">
                        <option value="">Select status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                        
                    </select>
                  </div>
                
                  
                <div class="form-group">
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