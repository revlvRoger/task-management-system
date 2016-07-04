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
       $note->date = $request->date;
       // call the notes method(model) and save one
       $tasks->notes()->save($note);
       // redirect to this page
       return back();
    }
    public function edit(Note $notes)
    {
        return view('notes.edit', compact('notes'));
    }
    public function update(Request $request, Note $notes)
    {
        $tasks = new Task;
        $notes->update($request->all());
        return redirect('index');
    }
    public function destroy(Note $notes)
    {
        return view('notes.destroy', compact('notes'));
    }
    public function del(Request $request, Note $notes)
    {
        $notes = Note::find($notes->id);
        $notes->delete();
        return redirect('index');
    }

}
