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
    <h1>Upload Data</h1>
    {!!Form::open(['action' => 'DataRepController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class = "form-group">
            {{Form::label('name', 'Name') }}
            {{Form::text('name','',[ 'class' => 'form-control col-4', 'placeholder' => 'Name of File']) }}
    </div>
    <div class = "form-group">
        {{Form::label('domain', 'Domain') }}
        {{Form::text('domain','',[ 'class' => 'form-control col-4', 'placeholder' => 'Domain']) }}
    </div>
    <div class = "form-group">
            {{Form::label('sector', 'Sector') }}
            {{Form::text('sector','',[ 'class' => 'form-control col-4', 'placeholder' => 'Sector']) }}
    </div>
    <div class="form-group">
        {{ Form::file('link')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!!Form::close() !!}
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