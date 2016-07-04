@extends('layout')

@section('content')
<div class="row">
    <div class="border col-md-6 col-md-offset-3">
            <h1 class="todo">To Do</h1>
            <hr>
        <ul class="list-group">
            @foreach($tasks as $task)
                    <li class="list-group-item  text-center">
                        <div class="delete">
                            <a href="/index/{{$task->id}}/delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div>
                            <a class="title" href="{{ $task->path() }}"> {{ $task->title }} </a>
                            <br>
                            <p>Date created: {{ $task->created_at->diffForHumans() }}</p>
                        <div>
                    </li>
            @endforeach
        </ul>


            <form action="index/add">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                    <br>
                    <br>
                </div>
            </form>
{{--         {{ $task->date() }} --}}
    </div>
</div>
@stop