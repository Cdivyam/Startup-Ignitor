@extends('startupview.app')
@section('content')

<div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Requsting Mentor Assistance</li>
          </ol>
         

    <div class="container">
        <div class="column">
            <a href="/online" class="btn btn-primary">Online Communication</a>
            <a href="/physical" class="btn btn-primary">Physical Communication</a>
        </div>
    </div>

    
@endsection