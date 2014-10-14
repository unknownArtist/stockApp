@extends('layouts.master')
@section('content')
	@include('includes.header-reg')
<!--  Include Master template and header-reg 
================================================ -->



<!--  Contributor Registration 
================================================ -->
	<div class="content">
		<div class="pure-g-r">		
			<div class="pure-u-1-5">
			</div>
			<div class="pure-u-3-5">
				<div class="contributor">
					<div class="hr">
						<h2>Contributor Registration</h2>
						<p>If you wish to become a contributor and start sharing and uploading your images and spreading some love, fill out the details below. </p>
					</div>			
						
						<form class="pure-form">
						    <fieldset>
						    		
						    		<div class="">
							    		<div class="form-element form-group">
							    			<div class="form-element">
									            <label for="first-name">First Name</label><br />
									            <input id="first-name" type="text" placeholder="First Name">
								            </div>
								            <div class="form-element">
									            <label for="last-name">Last Name</label><br />
									            <input id="last-name" type="text" placeholder="Last Name">
								            </div>
							            </div><br />
							            
							            <div class="form-element form-group">
								            <div class="form-element">
									            <label for="address">Address</label><br />
									            <input id="address" type="text" placeholder="123 Street">
								            </div>
								            <div class="form-element">
									            <label for="state">State</label><br />
									            <input id="state" type="text" placeholder="California">
								            </div>
								        </div><br />
								            
							            <div class="form-element form-group">
								            <div class="form-element">
									            <label for="city">City</label><br />
									            <input id="city" type="text" placeholder="Los Angeles">
								            </div>
								            <div class="form-element">					        
									            <label for="zip">Zip</label><br />
									            <input id="zip" type="text" placeholder="90001">
								            </div>
							            </div><br />
							            
							            <div class="form-element form-group">
								            <div class="form-element">					        
									            <label for="phone">Phone</label><br />
									            <input id="phone" type="text" placeholder="0123456">
								            </div>
								            <div class="form-element">					        
									            <label for="website-address">Website Address</label><br />
									            <input id="website-address" type="text" placeholder="http://website.com">
								            </div>
							            </div><br />
							            
							            <div class="form-element form-group">
									            <label for="gravitar">Gravitar</label><br />
									            <input id="gravitar" type="text" placeholder="http://website.com">
							            </div><br />
							            </div>
							            <div class="form-element form-group">
								            <div class="">					        
									            <label for="gravitar">Bio</label><br />
									            <textarea rows="5" cols="48">Write a little about yourself (Bio). This can also be a professional Blurb. 
												</textarea>
											</div>
										</div><br />
							            
							            <div class="social-inputs">	
									        <div class="">
								            <label for="facebook">Facebook</label>
								            <input id="facebook" type="text" placeholder="facebook">
								            </div>
								            
				
									        <div class="">
								            <label for="twitter">Twitter</label>
								            <input id="twitter" type="text" placeholder="twitter">
								            </div>
								            
								            <div class="">
								            <label for="google+">Google+</label>
								            <input id="google-plus" type="text" placeholder="Google+">
								            </div>
								            
				
									        <div class="">
								            <label for="linkedin">IinkedIn</label>
								            <input id="linkedin" type="text" placeholder="linkedin">
								            </div>
							            </div>
		
							            <div class="">
							            <label for="cb" class="pure-checkbox">
							                <input id="cb" type="checkbox"> I've read the terms and conditions
							            </label>
							            </div>
							            
							            <div class="">
							            <input class="pure-button pure-button-primary" type="submit" id="contribute" value="Submit" />
							            </div>
						            </div><!-- End pure-g -->
						    </fieldset>
						</form>	            
					</div><!-- End contributor -->
				</div><!-- End pure-2-3 -->
				<div class="pure-u-1-5">
				</div>
				</div><!-- End pure-2-3 -->
			</div><!-- End Content -->           

    

<!--  Include Footer 
================================================ -->
	@include('includes.footer')
@stop

