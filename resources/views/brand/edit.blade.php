@extends('layouts.master')
@section('content')



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
            <form id="quickForm" action="{{route('brand.update',$data->id)}}" method="post">
              @csrf
            
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="text" name="name" class="form-control" value="{{$data->name}}"id="exampleInputEmail1" 
                    placeholder="Enter name">
                  </div>

                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter UserID </label>
                    <input type="number" name="user_id" class="form-control" value="{{$data->user_id}}"id="exampleInputEmail1" 
                    placeholder="Enter user_id ">
                  </div>
                
                 <div class="form-group">
                    <label for="exampleInputEmail1">Enter ProductID</label>
                    <input type="number" name="product_id" class="form-control" value="{{$data->product_id}}"id="exampleInputEmail1" 
                    placeholder="Enter product_id">
                      
                   
                  </div>
                
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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