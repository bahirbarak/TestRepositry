@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="card">
        <div class="card-header">
            <h3>Category List</h3>
        </div>
        <div class="card-body">
                <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">{{$category->name}}</li>
            @endforeach
        </ul>
        </div>
    </div>
</div>
@endsection