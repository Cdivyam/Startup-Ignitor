@extends('mentorview.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Repository</li>
      </ol>
      <div class="row">
        <div class="col-12">
            <div class="container-fluid">
                <h1>Data Sets</h1>
                <hr>
                @if(count($datas) > 0)
                <div class="row">
                    @foreach ($datas as $data)
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-10">
                                <div class="card-body">
                                    <h3 >{{$data->name}}</h3>
                                    <small>Created on {{$data->created_at}} by {{$data->created_by}}</small>
                                </div>
                                <div class="card-footer text-white clearfix small z-1" >
                                    <span class="float-left">
                                        <a href="{{ route('downloadfile', $data->id)}}" target="_blank" style="color: white">
                                            <i class="fa fa-download" style = "font-size: 16px"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>                   
                    @endforeach
                </div>
                    {{$datas->links()}}
                @else
                        <p>No Data sets Found</p>
                </div>
                @endif
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

