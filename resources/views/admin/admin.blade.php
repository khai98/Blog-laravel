@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <div class="container">
        <div class="form">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th  class="center" scope="col">STT</th>
                    <th  class="center" scope="col">Title </th>
                    <th  class="center" scope="col">Describe</th>
                    <th  class="center" scope="col">Image</th>
                    <th  class="center" scope="col">Delete</th>
                    <th  class="center" scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <th scope="row">{{$post['id']}}</th>
                        <td>{{$post['title']}}</td>
                        <td>{{$post['describe']}}</td>
                        <td>image</td>
                        <td><a href="{{route('post.delete',$post->id )}}"><button style="margin-right: 10px" type="button" class="btn btn-primary" data-toggle="modal"> Delete</button></a></td>
                        <td><a href="{{route('post.edit',$post->id )}}"><button style="margin-right: 10px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1"> Edit </button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button style="margin-right: 10px; margin-left: 500px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Add </button>
            <!-- them -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> Add New</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form method="get" action="{{route('post.addNew')}}">
                                @csrf
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="recipient-name" name="title">
                                <label for="recipient-name" class="col-form-label">Describe:</label>
                                <input type="text" class="form-control" id="recipient-name" name="describe">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"> Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection