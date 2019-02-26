@extends('dataRep.app')

@section('content')
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
@endsection