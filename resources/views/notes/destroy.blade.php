@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">

    <h6>Delete Task</h6>
            <form method="POST" action="/notes/{{ $notes->id }}">
            {{ method_field('DELETE') }}
                <div class="form-group">
                    <textarea class="form-control" required="required" name="body">{{ $notes->body }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Delete</button>
                </div>
            </form>
    </div>
</div>
@stop