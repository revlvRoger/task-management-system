<?php

namespace App\Http\Controllers;
use App\Note;
use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Task $tasks)
    {
       $note = new Note;
       $note->body = $request->body;
       // call the notes method(model) and save one
       $tasks->notes()->save($note);
       // redirect to this page
       return back();

    // $note = new Note (['body' => $request->body]);
    // $note->body = $request->body;
    // $task->notes()->save($note);
    // return back();
    //
    // $task->notes()->create($request->all());
    //     return back();
    // return $request->all();

    }

}
