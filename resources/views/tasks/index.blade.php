@extends('layout')

@section('content')
<div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h1 class="text-center">Task Management System</h1>
        <hr>
        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item text-center">
                  {{--   <a href="/index/{{ $task->id }} ">{{ $task->title }}</a> --}}
                    <a href="{{ $task->path() }}"> {{ $task->title }} </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@stop