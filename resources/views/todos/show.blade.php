@extends('layouts.app')

@section('title')
    Todos Item
@endsection

@section('content')

    <h1 class="my-5" align="center">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
            </div>
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info my-2">Edit</a>
            <a href="/todos/{{$todo->id}}/delete-todo" class="btn btn-danger my-2">Delete</a>

        </div>
    </div>

@endsection