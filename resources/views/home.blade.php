@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">
                <a href="{{route('post.create')}}">New Post</a>
                </li>
                <li class="list-group-item">
                <a href="{{route('category.create')}}">New Category</a>
                </li>
                <li class="list-group-item">
                        <a href="{{route('category.index')}}">Category List</a>
                </li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                            @foreach($post as $todolist)
                            <tr>
                            <td>{{$todolist->title}}</td>
                            <td>{{$todolist->content}}</td>
                            <td><img src="E:\pictures\1.jpg" class="img-responsive" alt="image"></img></td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
