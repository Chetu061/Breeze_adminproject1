@extends('layouts.master')
@section('content')


<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">CMS</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">CMS</a></li>
        <li class="breadcrumb-item active">Dashboard </li>
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
                <h3 class="card-title">CMS Form</h3>
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
              <form action="{{route('cms.store')}}" method="post" enctype="multipart/form-data"> 
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}"id="exampleInputEmail1" 
                    placeholder="Enter Title">
                  </div>
                 
                  <div class="form-group">
                      <label for="exampleInputEmail1">Enter description</label>
                      <textarea type="text" class="form-control" id="description" placeholder="Enter description"
          name="description" value="{{old('description')}}"></textarea>
                    </div>
                  
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="images">Images:</label>
                      <div class="col-sm-10">
                      <input required  type="file" aria-describedby="images"  class="form-control" 
                      id="images" name="images[]" value="images" multiple>
                      </div>
                    </div>
 


                    <div class="form-group">
                      <label class="form-label" for="status">Status Type
                        </label>
                      <select class="form-control" name="status" value="{{old('status')}}">
                          <option value="">Select status</option>
                          <option value="0">Deactive</option>
                          <option value="1">Active</option>
                      </select>
                    </div>
                    
                  
                    <div class="card-footer">
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
