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
           <form id="quickForm" >
            {{-- action="{{route('category.store')}}" method="post"> --}}
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter UserID </label>
                    <input type="text" name="title" class="form-control" value="{{old('UserID')}}"id="exampleInputEmail1" 
                    placeholder="Enter UserID ">
                  </div>
                
                 <div class="form-group">
                    <label for="exampleInputEmail1">Enter ProductID</label>
                    <input type="text" name="ProductID" value="{{old('ProductID')}}"id="exampleInputEmail1" 
                    placeholder="Enter ProductID ">Enter ProductID
                      </label>
                   
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