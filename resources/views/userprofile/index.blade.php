@extends('layouts.master')
@section('content')



<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">UserProfile</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">UserProfile</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">UserProfile Management</h3>
              </div>

             
              <!-- /.card-header -->
              <div class="card-body">
               
                @if(session()->has('message'))
                 <div class="alert alert-success">
                  {{session()->get ('message')}}
                 </div>
                    @endif
                    
                <table class="table table-bordered table-hover" id="dataTable">
                  <thead>
                    <tr>
                      <th style="width: 5px">ID</th>
                      <th style="width: 10px">Name</th>
                     <th style="width: 25px">Email</th>
                      <th style="width: 10px">Password</th>
                      <th style="width: 20px">Image</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach($form as $d)
                      <tr>
                        
                         <td> {{$d->id}}</td>
                         <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->password}}</td> 
                        <td><img src="{{asset('uploads/'.$d->image)}}"
                          width="50px"
                          height="50px"alt="not image"></td> 
                       </tr>
                      @endforeach
                    
                       
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
</div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
  
  @endsection
  {{-- datatable code --}}
  @push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js">
  </script>
  <script>
  $(document).ready(function()
  {

    $('#dataTable').DataTable({
      "pageLength" :7
  });//dataTable is id of <table>
  });
  </script>
   @endpush
