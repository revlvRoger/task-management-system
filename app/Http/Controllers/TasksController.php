<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

class TasksController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        // $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show(Task $tasks)
    {
        // $tasks = Task::find($tasks);
        return view('tasks.show', compact('tasks'));
    }
    public function view()
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


    public function destroy(Task $tasks)
    {
        return view('tasks.delete', compact('tasks'));
    }


    public function del(Request $request, Task $tasks)
    {
        $tasks = Task::find($tasks->id);
        $tasks->delete();
        return redirect('index');
    }
}
