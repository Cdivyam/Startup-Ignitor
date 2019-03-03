@extends('startupview.app')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
::placeholder {
  color:black ;
  opacity: 1; /* Firefox */
}

input[type=text], select, textarea {
  width:100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
body {
  background-color:#00b300;
}

#regForm {
  background-image: linear-gradient(20deg, #ffe6e6,#ccffcc);
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  box-shadow: -12px -17px 9px 0px rgba(144, 172,203,0.25)
}

h2 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/dashboard">HOME</a>
        </li>
        <li class="breadcrumb-item active"><a href="#">REGISTRATION</a></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Registration</h1>
        </div>
      </div>
    </div>
{!!Form::open(['id' => 'regForm', 'action' => 'StartupController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <h2>Mentee Registration Form</h2>
    {{-- <div class="tab"> --}}
        <div class = "form-group">
            {{Form::label('name', 'Startup Name') }}
            {{Form::text('name','',[ 'class' => 'form-control col-12', 'placeholder' => 'Enter Startup Name']) }}
        </div>
        <div class = "form-group">
            {{Form::label('country', 'Country') }}
            {{Form::select('country', array('I' => 'India')), 'I' }}
        </div>
        <div class = "form-group">
            {{Form::label('state', 'State') }}
            {{Form::select('state', array(
                'M' => 'Maharashtra',
                'D' => 'Delhi', 
                'K' => 'Karnataka', 
                'C' => 'Chattisghar'
                ))}}
        </div>
        <div class = "form-group">
                {{Form::label('city', 'City') }}
                {{Form::select('city', array(
                    'M' => 'Mumbai', 
                    'D' => 'New Delhi', 
                    'K' => 'Kolkata', 
                    'C' => 'Chennai'
                    ))}}
        </div>
    {{-- </div>
    <div class="tab"> --}}
        <div class = "form-group">
            {{Form::label('phone', 'Phone no') }}
            {{Form::text('phone','',[ 'class' => 'form-control col-4', 'placeholder' => 'Enter Phone number']) }}
        </div>
        <div class = "form-group">
            {{Form::label('address', 'Address') }}
            {{Form::textarea('address','',[ 'class' => 'form-control col-12', 'placeholder' => 'Enter Address']) }}
        </div>
        <div class = "form-group">
            {{Form::label('description', 'Description') }}
            {{Form::textarea('description','',[ 'class' => 'form-control col-12', 'placeholder' => 'Enter Description']) }}
        </div>
    {{-- </div>
    <div class="tab"> --}}
        <div class = "form-group">
            {{Form::label('industry', 'Industry') }}
            {{Form::select('industry', array(
                'I' => 'Information Technology',
                'E' => 'E-Commerce', 
                'M' => 'Management', 
                'H' => 'Hardware'
                ))}}
        </div>
        <div class = "form-group">
            {{Form::label('sector', 'Sector') }}
            {{Form::select('sector', array(
                'I' => 'Web development',
                'E' => 'Service', 
                'M' => 'Software Development', 
                'H' => 'Automobile'
                ))}}
        </div>
        <div class="form-group">
            {{ Form::file('image')}}
        </div>
    {{-- </div> --}}
    
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!!Form::close() !!}