@extends('layouts.master')
@section('content')
	
<!--  Logo
================================================ -->
    <header class="header">
        <div class="">
            <h1 class="">Stockfree</h1>
        </div>
    </header>




<div class="content">

    <div class="pure-g-r well">
        <div class="pure-u-1-2">
            <div class="registration fr">
                <form class="pure-form pure-form-stacked" method="POST" action="/auth/login">
                    <fieldset>
                        <legend>Sign In</legend>

                        <label for="username">Username</label>
                        {{ Form::text("username",Input::old('username'),array('id'=>'username','placeholder'=>'Username')) }}
                        <label for="password">Password</label>
                        {{ Form::password('pass',Input::old('password')) }}
                        <input class="pure-button pure-button-primary" type="submit" id="login" value="Sign in" /> <a href="/user/forgot/password">Forgot your Password</a>
                    </fieldset>
                </form>
            </div>

        </div><!-- End registration -->
        <div class="pure-u-1-2">
            <div class="not-registered">
                <div class="hr">
                    <h3>Not a Member?</h3>
                    <a href="/auth/register">Register to become a Member</a>
                </div>
            </div>
        </div>
    </div><!-- End pure-g -->
</div><!-- End content -->

@stop