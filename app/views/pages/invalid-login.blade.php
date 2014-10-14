@extends('layouts.master')
@section('content')
	@include('includes.header-search')
	



<!--  Member Registration 
================================================ -->
	<div class="content">
	
	<div class="pure-g-r">
		<div class="pure-u-1">
			<p class="warning"><span>Warning! </span> Incorrect username or password given</p>
		</div>
	</div>	
		
	
	<div class="pure-g-r well">
		<div class="pure-u-1-2">
			<div class="registration fr">
			<form class="pure-form pure-form-stacked">
			    <fieldset>    
			    	<legend>Sign In</legend>

			            <label for="username">Username</label>
			            <input id="username" type="text" placeholder="Username">

			            <label for="password">Password</label>
			            <input id="password" type="password" placeholder="Password">

			        	<input class="pure-button pure-button-primary" type="submit" id="login" value="Sign in" /> <a href="#">Forgot your Password</a>
			    </fieldset>
			</form>
			</div>
			
		</div><!-- End registration -->
			<div class="pure-u-1-2">
				<div class="not-registered">
					<div class="hr">
						<h3>Not a Member?</h3>
						<a href="#">Register to become a Member</a>
					</div>			
				</div>
			</div>
		</div><!-- End pure-g -->
	</div><!-- End content -->

		
	@include('includes.footer')
@stop
