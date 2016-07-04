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

Route::get('welcome', 'TasksController@welcome');
Route::get('index','TasksController@index');
Route::get('index/add','TasksController@view');
Route::post('index','TasksController@store');

Route::get('index/{tasks}/delete','TasksController@destroy');
Route::delete('index/{tasks}', 'TasksController@del');



Route::get('index/{tasks}','TasksController@show');
// post resquest...
Route::post('index/{tasks}/notes','NotesController@store');

Route::get('notes/{notes}/edit', 'NotesController@edit');
//updating the notes id...
Route::patch('notes/{notes}', 'NotesController@update');

Route::get('notes/{notes}/destroy', 'NotesController@destroy');
Route::delete('notes/{notes}', 'NotesController@del');


Route::resource('todos', 'TodoController');
Route::resource('authors', 'AuthorController');