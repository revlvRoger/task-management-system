@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">

    <h3>Update Task</h3>
            <form method="POST" action="/notes/{{ $notes->id }}">
            {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea class="form-control" name="body">{{ $notes->body }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
                </div>
            </form>
    </div>
</div>
@stop