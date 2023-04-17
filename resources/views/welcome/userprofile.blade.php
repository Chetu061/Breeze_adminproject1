@extends('layouts.master1')
@section('content')


<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0"></h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">UserProfile </li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> UserProfile</h3>
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
              <form action="{{route('userprofile.store')}}" method="post" enctype="multipart/form-data"> 
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="text" name="name" class="form-control" value=""
                    id="exampleInputEmail1" 
                    placeholder="Enter name">
                  </div>
                 
                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Enter email"
          name="email" value=""></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label class="control-label " for="images">Choose Password</label>
                      <input  type="text" aria-describedby="images"  class="form-control" 
                      id="password" name="password" value="password" >
                      </div>
                  
                      
                      <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input type="file" aria-describedby="image"  class="form-control" 
                        id="image" name="image" value="">
                      </div>
                  
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <script>
                    ClassicEditor
                    .create(document.querySelector('#description'))
                    .catch(error=>{
                      console.error(error);
                    })</script>
                  </div>
              </form>
            </div>
            </div>
            </div>
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
 
@endsection
