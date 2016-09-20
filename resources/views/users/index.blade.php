@extends('layout')

@section('content')



<div class="row">
    <div class="border col-md-6 col-md-offset-3">
            <h1 class="todo">Log In</h1>
            <hr>
            <div class="login-wrapper">
                <form method="" action="">
                        <div class="form-group log">
                            <input type="text" class="form-control login" required="required" name="Username" placeholder="Username"><i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" class="form-control login" required="required" name="Password" placeholder="Password">
                            <i class="fa fa-lock" aria-hidden="true"></i>

                        </div>
                    <button type="submit" class="btn btn-primary btn-block ">Login</button>
                </form>
                <a class="new-acc" href="/users/register"> Create new account </a>
            </div>
    </div>
</div>


@stop