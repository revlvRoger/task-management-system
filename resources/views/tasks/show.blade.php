@extends('layout')

@section('content')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" />
 --}}
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h1>{{ $tasks->title }}</h1>
        <ul class="list-group">
            @foreach ($tasks->notes as $note)

                <li class="list-group-item">
                    {{ $note->body }}
                    <a href=""><i class="fa fa-trash fa-1x" aria-hidden="true"></i></a>
                    <a href="/notes/{{ $note->id }}/edit"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>

                </li>
            @endforeach
        </ul>
        <hr>
        <h3>Add New</h3>

            <form method="POST" action="/index/{{ $tasks->id }}/notes">
                <div class="form-group">
                    <textarea class="form-control" name="body" placeholder="Add today task..." required="required"></textarea>
                </div>
                <div class="form-group">
                      {{--   <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add List</button>
                </div>
            </form>
    </div>
</div>
@stop