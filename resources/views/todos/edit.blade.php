@extends('layouts.app')

@section('title')
    Todos-Edit
@endsection

@section('content')
    <h1 class="text-center">Edit Todos</h1>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Update todo</div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">
                                {{$error}}
                            </li>

                            
                        @endforeach
                    </ul>
                </div>
                @endif
            <form action="/todos/{{$todo->id}}/update-todo" method="POST" class="form">
                @csrf
                
                <input type="text" name="name"class="form-control"value="{{$todo->name}}">
                <textarea name="description" id="" cols="30" rows="5" class="form-control mt-2">{{ $todo->description}}</textarea>
                <center class="mt-2"><Button type="submit"  class="btn btn-success">Update todo</Button></center>
            </form>
            
            </div>
        </div>
        
        </div>
    </div>
    
@endsection