<?php

namespace App\Http\Controllers;

use App\todos;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index(){
        return view('todos.index')->with('todos',todos::all());
    }

    public function show(todos $todo){
        
        return view('todos.show')->with('todo',$todo);
    }

    public function create(){

        return view('todos.create');


    }

    public function store(){
        
        $this->validate(request(),[
            "name" => "required",
            "description" => "required"
        ]);

        $data = request()->all();

        $todo = new todos();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success','Todo Created Successfully');


        return redirect('/todos');
    }

    public function edit(todos $todo){

        return view('todos.edit')->with('todo',$todo);

    }

    public function update(todos $todo){
        $this->validate(request(),[
            "name" => "required",
            "description" => "required"
        ]);

        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        
        $todo->save();

        session()->flash('success','Todo Updated Successfully');


        return redirect("/todos");
    }

    public function deleteTodo(todos $todo){

        $todo->delete();

        session()->flash('success','Todo deleted Successfully');


        return redirect("/todos");
    }

    public function complete(todos $todo){
        $todo->completed = True;
        
        session()->flash("success","Task completed Successfully");

        $todo->save();

        return redirect("/todos");
    }
}
