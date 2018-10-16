@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <div class="container">
    <div class="col-lg-12 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400"></a>
            <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <div class="col-12">    {{$post->describe}}</div>
            </div>
        </div>
        <a href="{{route('index')}}"> <button type="submit" style="margin-top: 10px; background-color: #3f9ae5; "> Back List</button></a>
    </div>
    </div>
@endsection