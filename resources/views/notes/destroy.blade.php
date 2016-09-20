@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h3>Delete</h3>
        <hr>
            <form method="POST" action="/notes/{{ $notes->id }}">
            {{ method_field('DELETE') }}
                <div class="form-group">
                    <textarea class="form-control" disabled="disabled" readonly="readonly"  name="body">{{ $notes->body }}</textarea>
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