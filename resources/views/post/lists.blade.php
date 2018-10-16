@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <div class="container">
        <form class="form-inline my-2 my-lg-0" style="margin-left: 820px" action="{{route('posts.search')}}">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
        </form>


        <div class="row">
            <label class="text" style="margin-left: 20px; text-transform: uppercase"> Bai Viet Moi Nhat </label>
            <div class="col-md-12">
                <div class="row">
                    @foreach($posts as $key => $post)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('posts.simple', $post->id)}}"> {{ $post->title }}</a>
                                    </h4>
                                    <div class="col-12"> {{$post->describe}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $posts->links() }}
            </div>
        </div>
@endsection