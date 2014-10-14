@extends('layouts.master')
@section('content')
	@include('includes.header-reg')
<!--  Include Master template and header-reg 
================================================ -->



	<!--  Member Registration 
	================================================ -->
	<div class="content">
		<div class="pure-g-r">		
			<div class="pure-u-1-5">
			</div>
			<div class="pure-u-3-5">
				<div class="registration">
					<div class="hr">
						<h2>Members Registration</h2>
						<p>To start downloading images you must become a member. this grants you access to all our images (limit 10 images per day)  NB: If you also wish to become a contributor fill out the contributor details also. </p>
					</div>		
			
					<form class="pure-form pure-form-stacked" method="post" action="/auth/register">
					    <fieldset>
		
					            <label for="name">Username</label>
                                {{ Form::text("username",Input::old("username"),array('id'=>'Username','placeholder'=>'Username')) }}
					            <label for="password">Password</label>
					            {{ Form::password("pass",array('id'=>'password','placeholder'=>'Password')) }}
                                <label for="password">Confirm Password</label>
                                {{ Form::password("password_confirmation",array('id'=>'password','placeholder'=>'Password')) }}

                                <label for="email">Email Address</label>
					            {{ Form::text("email",Input::old("email"),array('type'=>'email', 'id'=>'Username','placeholder'=>'Email Address')) }}
					            <label for="offers" class="pure-checkbox">
					                <input id="offers" type="checkbox"> Email me Updates and special offers from stockfree.
					            </label>
					            <label for="terms" class="pure-checkbox">
					                <input name="agreed_terms" id="terms" type="checkbox"> I agree to Stockfree's <a href="#">Terms </a>  and <a href="#">Licensing.</a>
					            </label>
					
					            <input class="pure-button pure-button-primary" type="submit" id="regiseter" value="Submit" />
					    </fieldset>
					</form>
				</div><!-- End pure-1-3 -->
				<div class="pure-u-1-5">
				</div>
			</div><!-- End pure-g-r -->
		</div><!-- End pure-g-r -->
	</div><!-- End Content -->      

    

<!--  Include Footer 
================================================ -->
	@include('includes.footer')
@stop

