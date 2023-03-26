@extends('layouts.master')
@section('content')


<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CMS Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                  
<form  id="quickForm1" action="{{route('cms.update',$data->id)}}" method="post" enctype="multipart/form-data">                        
  @csrf
  <div class="card-body">
  <div class="form-group">
  <label for="exampleInputEmail1">Enter Title</label>
  <input type="text" name="title" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" placeholder="Enter Title">
  </div>
  
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter description</label>
                      <textarea type="text" class="form-control" id="description" placeholder="Enter description"
                      name="description" value="{{old('description')}}"></textarea>
                    </div>
          
                <div class="form-group">
                  <label for="images">Image</label>
                  <input type="file" aria-describedby="images"  class="form-control"
                  id="images" name="images" value="{{ $data->images }}">
                </div>
                  
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="status">Status Type<span class="text-danger">
                          *</span></label>
                  <select class="form-control" name="status"value="{{$data->status}}">
                      <option value="">Select status Type</option>
                      <option value="0">Active</option>
                      <option value="1">Deactive</option>
                  </select>
                </div> 
                
<!--end status-->
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <script>
                    ClassicEditor
                    .create(document.querySelector('#description'))
                    .catch(error=>{
                      console.error(error);
                    })</script>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  


@endsection