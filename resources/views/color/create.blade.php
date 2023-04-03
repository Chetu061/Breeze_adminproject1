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
                <h3 class="card-title">Color Form</h3>
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
            <form id="quickForm" action="{{route('color.store')}}" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Color Name</label>
                    <input type="text" name="color_name" class="form-control" value="{{old('color_name')}}"id="exampleInputEmail1" 
                    placeholder="Enter color_name">
                  </div>

                  
                
                  
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Choose user</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="color_user_id" value="{{old('color_user_id')}}">
                         @foreach($user as $pro)
                      <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endforeach 
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Choose product</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="color_product_id" value="{{old('color_product_id')}}">
                         @foreach($product as $pro)
                      <option value="{{$pro->id}}">{{$pro->title}}</option>
                        @endforeach 
                    </select>
                  </div>
                   
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