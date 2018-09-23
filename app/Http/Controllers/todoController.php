<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;
use Session;

class todoController extends Controller
{
    //



    public function todos(){
        $todo = todos::all();
        return view('todos')->with('todoData',$todo);
    }

    public function store(Request $request){
        
        $todo = new Todos;
        $todo->todo =$request->todofield;
        $todo->save();
        Session::flash('success','Todo Created Successfully');
        return redirect()->back();
    }
    // todo delete function
    public function delete($id){
        $todo = Todos::find($id);
        $todo->delete();
        Session::flash('success','Todo Deleted Successfully');
        return redirect()->back();
    }
    
    public function myUpdate($id){

        $todo = todos::find($id);
        Session::flash('success','Todo Updated succesfully');
        return view('todoUpdate')->with('todoUpdate',$todo);
    }

    public function mysavemethod(Request $request,$id){
        $data = todos::find($id);
        $data->todo = $request->mysave;
        $data->permission = 0;
        $data->save();
        // $todoUpdate = todos::all();
        
        // return view('todos')->with('todoData',$todoUpdate);
        return redirect()->back();
        
    }


    public function completed($id){
        $todo = todos::find($id);

        $todo->permission = 1;
        $todo->save();
        $todo = todos::all();
        Session::flash('success','Todo Marked As Completed');
        return view('todos')->with('todoData',$todo);
    }
}
