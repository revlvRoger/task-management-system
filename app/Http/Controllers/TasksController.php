<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class TasksController extends Controller
{
    public function index()
    {
        // $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show(Task $tasks)
    {
        // $tasks = Task::find($tasks);
        // $tasks = Task::with('notes')->get();
        // return $tasks;
        return view('tasks.show', compact('tasks'));

    }


    public function create()
    {
        return view('tasks.add', compact('tasks'));
    }

    public function store(Request $request)
    {
        $tasks = Task::create($request->all());
        // save to database
        //
        // $tasks = new Task;
        // $tasks->title = $request->get('title');
        // $tasks->save();
        return redirect('index');
    }
    public function destroy($id)
    {
        $task = DB::table('tasks')->where('id', $id);
        $task->delete();
        return redirect('index');
    }



    // public function del(Request $request, Task $tasks)
    // {
    //     $tasks = Task::find($tasks->id);
    //     $tasks->delete();
    //     $tasks->notes()->delete();
    //     return redirect('index');
    // }

}
