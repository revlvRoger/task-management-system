@extends('layout')
@section('content')
 <div class="row">
    <div class="border col-md-6 col-md-offset-3">

    <h3>Add New Task</h3>
            <form method="POST" action="">

                <div class="form-group">
                    <textarea class="form-control" required="required" name="body" placeholder="Add New"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Add</button>
                </div>
            </form>
    </div>
</div>
@stop