@include('layouts.app')
    

          @if(Session::has('success'))
          <div class="alert alert-success">
              {{Session::get('success')}}
          </div>
          @endif
        <div class="flex-center" style="margin-top:40px">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                    <form action="/create/todo" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <div class="input-group-addon">Todo</div>
                        <input type="text" class="form-control input-lg" name="todofield" placeholder="Add Todo">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
           

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-dashed">
                            <tr>
                                <td>ID</td>
                                <td>todos</td>
                                <td>Permission</td>
                                <td>Delete</td>
                                <td>Edit</td>
                                <td>Marks</td>
                            </tr>
                            @foreach($todoData as $todo)
                            <tr>
                            <td>{{$todo->id}}</td>
                            <td>{{$todo->todo}}</td>
                            <td>{{$todo->permission}}</td>
                            <td><a href="{{url('/todo/delete',['id'=>$todo->id])}}" class="btn btn-danger" role="button">Delete</a></td>
                            <td><a href="{{url('/todo/myedit',['id'=>$todo->id])}}" class="btn btn-success" role="button">Edit</a></td>
                            @if(!$todo->permission)
                            <td><a href="{{url('/todo/completed',['id'=>$todo->id])}}" class="btn btn-success" role="button">Mark as Complete</a></td>
                            @else
                            <td><span class="text-sucess">Completed</span></td>
                            @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
           
            {{-- <div class="content">
                <div class="title m-b-md">
                    Todos
                </div>

               
            </div> --}}
        </div>

