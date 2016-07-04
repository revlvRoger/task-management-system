@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h3>Update</h3>
        <hr>
            <form method="POST" action="/notes/{{ $notes->id }}">
            {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea class="form-control" required="required" name="body">{{ $notes->body }}</textarea>
                </div>
                  <h3>Date</h3>
                    <hr>
                <div class="form-group">
                    <input class="form-control" type="date" name="date" required="required" value="{{ $notes->date }}">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
                    <br>
                    <br>
                </div>
            </form>
    </div>
</div>
@stop