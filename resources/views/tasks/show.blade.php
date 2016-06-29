@extends('layout')
@section('content')

 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h1>{{ $tasks->title }}</h1>
        <hr>
        <ul class="list-group">
            @foreach ($tasks->notes as $note)
                <li class="list-group-item">
                    {{ $note->body }}
                    <a href="/notes/{{$note->id}}/destroy"><i class="fa fa-trash fa-1x" aria-hidden="true"></i></a>
                    <a href="/notes/{{ $note->id }}/edit"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>
                </li>
            @endforeach
        </ul>

        <hr>
            <form method="POST" action="/index/{{ $tasks->id }}/notes">
                <div class="form-group">
                    <h6>Add New</h6>
                    <textarea class="form-control" name="body" placeholder="Add today task..." required="required"></textarea>
                </div>
                <div class="form-group">
                      <h6>Deadline</h6>
                      <hr>
                    <input class="form-control" type="date" name="date"><br><br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                </div>
            </form>
    </div>
</div>
@stop