@extends('mentorview.app')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
       
      <!--</ol>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Mentor</h1>
          
        </div>
      </div> -->
    </div>

    <div class="container">
        <h2>Blacklist</h2>
        <p>Following are the mentee applicatoins whom you have blacklisted. You can undo it at any point of time.</p>
        <div class="card" style="width:400px">
          <img class="card-img-top" src="D:\xampp\htdocs\Startup-Ignitor\public\images\le.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <!--<a href="#" class="btn btn-primary disabled stretched-link">Blacklisted</a> -->
            <a href="#" class="btn btn-primary  stretched-link">Remove from Blacklist</a>
        </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="D:\xampp\htdocs\Startup-Ignitor\public\images\le.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Smith Patel</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <!--<a href="#" class="btn btn-primary disabled stretched-link">Blacklisted</a> -->
              <a href="" class="btn btn-primary  stretched-link">Remove from Blacklist</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="D:\xampp\htdocs\Startup-Ignitor\public\images\le.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">Jane Doe</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <!--<a href="#" class="btn btn-primary disabled stretched-link">Blacklisted</a> -->
              <a href="#" class="btn btn-primary  stretched-link">Remove from Blacklist</a>
            </div>
        </div>
      </div>
    
@endsection