@include('layouts.app')
    <body>

          
     
        <div class="flex-center position-ref full-height">
           

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    <form action="{{url('/todo/save',['id'=>$todoUpdate->id])}}" method="post" class="form">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label  for="mysave">Todo</label>
                    <input type="text" class="form-control input-lg" name="mysave" value="{{$todoUpdate->todo}}">
                </div>
                    </form>
                    </div>
                </div>
            </div>
           
            {{-- <div class="content">
                <div class="title m-b-md">
                    Todos
                </div>

               
            </div> --}}
        </div>
    </body>
