@extends('dataRep.app')

@section('content')
<div class="container-fluid">
<h1>Data Sets</h1>
<hr>
@if(count($datas) > 0)
<div class="row">
    @foreach ($datas as $data)
        <div class="col-xl-3 col-sm-6 mb-3">
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
@endsection

