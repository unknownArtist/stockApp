@extends('layouts.master')
@section('content')
	@include('includes.header-reg')
<!--  Include Master template and header-reg 
================================================ -->



<div class="content">
<!--  Member Registration 
================================================ -->
	<div class="registration">
		<div class="hr">
			<h2>Members Registration</h2>
			<p>To start downloading images you must become a member. this grants you access to all our images (limit 10 images per day)  NB: If you also wish to become a contributor fill out the contributor details also. </p>
		</div>		

		<form class="pure-form pure-form-aligned">
		    <fieldset>
		        <div class="pure-control-group">
		            <label for="name">Username</label>
		            <input id="name" type="text" placeholder="Username">
		        </div>
		
		        <div class="pure-control-group">
		            <label for="password">Password</label>
		            <input id="password" type="password" placeholder="Password">
		        </div>
		
		        <div class="pure-control-group">
		            <label for="email">Email Address</label>
		            <input id="email" type="email" placeholder="Email Address">
		        </div>
		
		        <div class="pure-controls">
		            <label for="cb" class="pure-checkbox">
		                <input id="cb" type="checkbox"> I've read the terms and conditions
		            </label>
		
		            <input class="pure-button pure-button-primary" type="submit" id="submit" value="Submit" />
		        </div>
		    </fieldset>
		</form>
	</div><!-- End registration -->



<!--  Contributor Registration 
================================================ -->
	<div class="contributor">
		<div class="hr">
			<h2>Contributor Registration</h2>
			<p>If you wish to become a contributor and start sharing and uploading your images and spreading some love, fill out the details below. </p>
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
			
			            <input class="pure-button pure-button-primary" type="submit" id="submit" value="submit" />

			        </div>
			    </fieldset>
			</form>	            
		</div><!-- End contributor -->                      
</div><!-- End Content -->        

    

<!--  Include Footer 
================================================ -->
	@include('includes.footer')
@stop

