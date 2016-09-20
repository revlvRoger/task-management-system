@extends('layout')
@section('content')

 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
    <h3><a class="task-title" href="/index">{{ $tasks->title }}</a></h3>
        <p>Date created: {{$tasks->created_at->DiffForHumans()}}</p>
        <hr>

        <ul class="list-group">
            @foreach ($tasks->notes as $note)
                <li class="list-group-item">
                <div class="button-del">
                <a href="/notes/{{$note->id}}/delete"><i class="del fa fa-times fa-1x" aria-hidden="true"></i></a>
                </div>
                <div class="note-text">
                    <span>" {{ $note->body }} "</span>
                    <br>
                    Date: {{ $note->date }}
                </div>

                    <div class="button-edit">
                        <a href="/notes/{{ $note->id }}/edit">Edit</a>
                    <div>
                </li>
            @endforeach
        </ul>

            <form method="POST" action="/index/{{ $tasks->id }}/notes">
                <div class="form-group">
                    <h3>Add</h3>
                    <textarea class="form-control" name="body" placeholder="Add new note . . ." required="required"></textarea>
                </div>
                <div class="form-group">
                    <h3>Date</h3>

                    <input class="form-control" type="date" name="date" required="required"><br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                    <br>
                    <br>
                </div>
            </form>
    </div>
</div>
@stop