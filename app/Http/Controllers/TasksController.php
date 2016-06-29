<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
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
        return view('tasks.show', compact('tasks'));
    }
    // public function add()
    // {

    // }
}
