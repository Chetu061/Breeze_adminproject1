
@extends('layouts.master')
@section('css')
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
<!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CMS Management</h3>
              </div>
              <div class="card-header">
                <h3 class="card-title"><a href="{{route('cms.create')}}">
                  <button type="button" class="btn btn-primary btn-sm">Add</button></h3></a>
                  {{-- <h3 class="card-title">  <a href="{{route('cms.trash')}}">
                    .  .   <button type="button"class="btn btn-success">
               go to trash</button></h3><br><br> --}}

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
                      <th style="width:5px">ID</th>
                      <th style="width:10px">Title</th>
                      <th style="width:15px">Description</th>
                      <th style="width:10px">Image</th>
                      <th style="width:10px">Status</th>
                      <th style="width:50px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @foreach($data as $d)
                       <tr>
                        <td> {{$d->id}}</td>
                        <td>{{$d->title}}</td>
                       <td>{!!$d->description!!}</td><td>
            <?php
            $img_url = explode("|",$d->images);
            ?> 
                         @foreach($img_url as $img)
                         <img src="{{ asset('uploads/car/'.$img) }}" width="70px" height="70px" alt="Image">
                         @endforeach
                        </td>@if($d->status==0)
                        <td><span class="badge badge-danger">Deactive</span></td> 
                        @else
                        <td><span class="badge badge-success">Active</span></td> 
                  
                        @endif
                       
                         </td>
                       <td> 
                         <button  type="button" class="btn btn-warning btn-sm"> 
                           <a href="{{route('cms.edit',$d->id)}}">
                          Edit</button> </a>                                             

                          
                            <button  type="button" class="btn btn-danger btn-sm"> 
                             <a href="{{route('cms.delete',$d->id)}}"> 

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

$(document).ready(function() {
  
    $('#dataTable').DataTable(
      {
        "pageLength" :5
      }
    );//dataTable is id of <table>
});
</script>
  @endpush

   
 
 
  