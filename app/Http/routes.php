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

// Route::get('/', function () {

//     $people = ['Roger','Jaeson','Brian'];
//     return view('welcome', compact('people'));
// });
// Route::get('/', 'PagesController@home');
// Route::get('any', 'PagesController@about');
Route::get('index','TasksController@index');
Route::get('index/{tasks}','TasksController@show');
// post resquest...
Route::post('index/{tasks}/notes','NotesController@store');

Route::get('notes/{notes}/edit', 'NotesController@edit');
//updating the notes id...
Route::patch('notes/{notes}', 'NotesController@update');


