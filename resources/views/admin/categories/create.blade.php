@extends('layouts.app')
@section('content')

<div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home">Home</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Category</div>
                    <div class="card-body">
                        @if(count($errors)>0)
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                 <div class="form-group">
                     <label for="category">Name</label>
                     <input type="text" class="form-control" name="category" id="category">
                 </div>
    
                
                
                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit">Store</button>
                     </div>
                 </div>
    
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    

@endsection