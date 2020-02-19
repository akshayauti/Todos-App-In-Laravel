<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos','todosController@index');

Route::get('todos/{todo}','todosController@show');

Route :: get('create-todos','todosController@create');

Route::post('store-todo','todosController@store');

Route::get('todos/{todo}/edit','todosController@edit');

Route :: post('todos/{todo}/update-todo', 'todosController@update'); 

Route :: get('todos/{todo}/delete-todo', 'todosController@deleteTodo');

Route :: get('todos/{todo}/complete', 'todosController@complete'); 


