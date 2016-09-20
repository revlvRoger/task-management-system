<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('users', 'UsersController@index');
Route::get('users/register', 'UsersController@gotoRegister');
Route::get('index','TasksController@index');
Route::get('index/add','TasksController@create');
Route::post('index','TasksController@store');
Route::get('index/{tasks}','TasksController@show');
Route::get('index/{id}/delete','TasksController@destroy');


Route::post('index/{tasks}/notes','NotesController@store');
Route::get('notes/{notes}/edit', 'NotesController@edit');
Route::patch('notes/{notes}', 'NotesController@update');
Route::get('notes/{notes}/delete', 'NotesController@destroy');




// Route::resource('users', 'UsersController');
// Route::resource('tasks', 'TaskController');
Route::resource('todos', 'TodoController');
Route::resource('authors', 'AuthorController');