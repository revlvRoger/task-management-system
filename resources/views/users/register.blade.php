@extends('layout')

@section('content')



<div class="row">
    <div class="border col-md-6 col-md-offset-3">
            <h1 class="todo">Register</h1>
            <hr>
            <div class="register-wrapper">
                <form method="" action="">
                        <div class="form-group reg">
                        <span class="register-span">Username:</span><input type="text" class="form-control register" required="required" name="username" placeholder="Enter username">
                            <span class="register-span">Gmail</span><input type="text" class="form-control register" required="required" name="email" placeholder="Enter gmail">
                            <span class="register-span">Password</span><input type="text" class="form-control register" required="required" name="password" placeholder="Enter password">
                        </div>
                    <button type="submit" class="btn btn-primary btn-block ">Sign Up</button>
                </form>
            </div>
    </div>
</div>


@stop