@extends('layout')
@section('content')
<div class="row">
    <div class="border col-md-6 col-md-offset-3">
        <h3>Add To Do</h3>
        <hr>
            <form method="POST" action="/index">
                <div class="form-group">
                    <textarea class="form-control" name="title" placeholder="Add To Do List..." required="required"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                    <br>
                    <br>
                </div>
            </form>

    </div>
</div>
@stop