@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h3>Delete To Do</h3>
        <hr>
            <form method="POST" action="/index/{{$tasks->id}}">
            {{ method_field('DELETE') }}
                <div class="form-group">
                    <textarea class="form-control" required="required" name="title">{{ $tasks->title }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Delete</button>
                    <br>
                    <br>
                </div>
            </form>
    </div>
</div>
@stop