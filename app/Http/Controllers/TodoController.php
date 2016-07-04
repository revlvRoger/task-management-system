<?php

namespace App\Http\Controllers;

use App\TodoHistory;
use App\Todo;
use App\Author;
use Illuminate\Http\Request;

use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todos.index', [
            // 'todos' => Todo::all()
            'todos' => Todo::with('author')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create', [
            'authors' => Author::lists('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('title', 'author_id', 'status');

        $todo = Todo::create($data);

        TodoHistory::createHistory(
            $request->get('author_id'),
            $request->get('status'),
            $todo->id
        );

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('todos.show', [
            'todo' => Todo::find($id),
            'history' => TodoHistory::where('todo_id', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('todos.edit', [
            'todo' => Todo::find($id),
            'authors' => Author::lists('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->update($request->all());

        TodoHistory::createHistory(
            $request->get('author_id'),
            $request->get('status'),
            $todo->id
        );

        return redirect()
            ->route('todos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
