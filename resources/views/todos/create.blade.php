@extends('layouts.app')

@section('title')
    Todos-Create
@endsection

@section('content')
    <h1 class="text-center">Create Todos</h1>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Create new todo</div>
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
            <form action="/store-todo" method="POST" class="form">
                @csrf
                <input type="text" name="name"class="form-control" placeholder="Enter Name for todos">
                <textarea name="description" id="" cols="30" rows="5" class="form-control mt-2"placeholder="Enter Description Here"></textarea>
                <center class="mt-2"><Button type="submit" text = "Crete todo" class="btn btn-success">Create todo</Button></center>
            </form>
            
            </div>
        </div>
        
        </div>
    </div>
    
@endsection