@extends('layouts.master')
@section('content')

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brand Management</h3>
              </div>
               <div class="card-header">
                <h3 class="card-title"><a href="{{route('color.create')}}">
                  <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
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
                      <th style="width: 15px">ID</th>
                      <th style="width: 10px">color_name</th>
                      <th style="width: 15px">color_user_id</th>
                      <th style="width: 30px">color_product_id</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach($data as $d)
                      <tr>
                        
                         <td> {{$d->id}}</td>
                         <td>{{$d->color_name}}</td>
                        <td>{{$d->color_user_id}}</td>
                        <td>{{$d->color_product_id}}</td> 
                 <td>     <button class="btn btn-warning " type="button" class="btn btn-warning text-dark"> 
                              <a href="{{route('color.edit',$d->id)}}">
                               Edit</button></a>
                            <button  type="button" class="btn btn-danger"> 
                              <a href="{{route('color.delete',$d->id)}}">
                            Delete</button></a>
                  </td>
                  
                  
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
      "pageLength" :2
  });//dataTable is id of <table>
  });
  </script>
   @endpush