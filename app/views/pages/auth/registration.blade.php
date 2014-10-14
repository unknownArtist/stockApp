@extends('layouts.master')
@section('content')
	@include('includes.header-reg')

<div class="content">


		<div class="hr">
			<h2>Members Registration</h2>
			<p>By filling out the member form you can begin to start downloading images. If you wish to contribute and share some love fill in the contributor details also.  If you are already a member please login first and contimnue filling out the contributor details. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		

			<form class="pure-form pure-form-aligned" method="post" action="/auth/register">
			    <fieldset>
			        <div class="pure-control-group">
			            <label for="name">Username</label>
			            <input name="username" id="name" type="text" placeholder="Username">
			        </div>
			
			        <div class="pure-control-group">
			            <label for="password">Password</label>
			            <input name="password" id="password" type="password" placeholder="Password">
			        </div>
			
			        <div class="pure-control-group">
			            <label for="email">Email Address</label>
			            <input name="email" id="email" type="email" placeholder="Email Address">
			        </div>
			
			        <div class="pure-controls">
			            <label for="cb" class="pure-checkbox">
			                <input name="termsconditions" id="cb" type="checkbox"> I've read the terms and conditions
			            </label>
			
			            <button type="submit" class="pure-button pure-button-primary">Submit</button>
			        </div>
			    </fieldset>
			</form>
        @if($errors)
            {{ $errors }}
        @endif
		<div class="hr">
			<h2>Contributor Registration</h2>
			<p>To contribute by uploading images and sharing and spreading the love.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  </p>
		</div>			
			
			<form class="pure-form pure-form-aligned">
			    <fieldset>
			        <div class="pure-control-group">
			            <label for="first-name">First Name</label>
			            <input id="first-name" type="text" placeholder="First Name">
			        </div>
			
			        <div class="pure-control-group">
			            <label for="last-name">Last Name</label>
			            <input id="last-name" type="text" placeholder="Last Name">
			        </div>
			
			        <div class="pure-control-group">
			            <label for="address">Address</label>
			            <input id="address" type="text" placeholder="123 Street">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="state">State</label>
			            <input id="state" type="text" placeholder="California">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="city">City</label>
			            <input id="city" type="text" placeholder="Los Angeles">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="zip">Zip</label>
			            <input id="zip" type="text" placeholder="90001">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="phone">Phone</label>
			            <input id="phone" type="text" placeholder="0123456">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="website-address">Website Address</label>
			            <input id="website-address" type="text" placeholder="http://website.com">
			        </div>
			        
			       <div class="pure-control-group">
			            <label for="gravitar">Gravitar</label>
			            <input id="gravitar" type="text" placeholder="http://website.com">
			        </div>			        
			        
			       <div class="pure-control-group">
			            <label for="gravitar">Bio</label>
			            <textarea rows="5" cols="40">Write a little about yourself (Bio). This can also be a professional Blurb. 
						</textarea>
			        </div>
			        <div class="social-form-tile"><h4>Social Media</h4></div>
			       <div class="pure-control-group">
			            <label for="facebook">Facebook</label>
			            <input id="facebook" type="text" placeholder="facebook">
			        </div>
			        
			        <div class="pure-control-group">
			            <label for="twitter">Twitter</label>
			            <input id="twitter" type="text" placeholder="twitter">
			        </div>						        
			
			        <div class="pure-controls">
			            <label for="cb" class="pure-checkbox">
			                <input id="cb" type="checkbox"> I've read the terms and conditions
			            </label>
			
			            <button type="submit" class="pure-button pure-button-primary">Submit</button>
			        </div>
			    </fieldset>
			</form>	            
                      
</div><!-- End Content -->        

    


	@include('includes.footer')
@stop

