@extends('layouts.master')
@section('content')
    @include('includes.header-search')
<!--  Header-reg - Top Nav
================================================ -->

   


<!--  Slider 
================================================ -->
        <div class="content">

            <div class="pure-g-r">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
                </div>
            </div>




<!--  Intro 
================================================ -->
            <div class="pure-u-g-r intro">
			    <div class="pure-u-1 ">
			       <h2>100 % Free Downloads</h2>
				           <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
			      </div><!-- End pure-u-1 -->  
		    </div>



<!--  Member login Home 
================================================ -->
            @if(!Sentry::check())
	         <div class="pure-g-r well">
	           <div class="pure-u-2-5">
			          <div class="login-form">
			            <h3>Become a member and start downloading</h3>
				            <form action="/auth/register" method="post" class="pure-form pure-form-aligned home-registration-form">
							    <fieldset>
							        <div class="pure-control-group">
							            <label for="name">Username</label>
							            {{ Form::text("username",Input::old("username"),array('id'=>'name','placeholder'=>'Username')) }}
							        </div>
							
							        <div class="pure-control-group">
							            <label for="password">Password</label>
                                        {{ Form::password("pass",array('id'=>'name','placeholder'=>'Password')) }}
							        </div>
							
							        <div class="pure-control-group">
							            <label for="email">Username</label>
							            {{ Form::text("username",Input::old("username"),array('id'=>'username','placeholder'=>'Username')) }}
							        </div>
							
							        <div class="pure-controls">
							            <label for="cb" class="pure-checkbox">
							                <input name="termsconditions" id="cb" type="checkbox"> I've read the terms and conditions
							            </label>
							
							            <button type="submit" class="pure-button pure-button-primary submit-btn">Submit</button>
							        </div>
							    </fieldset>
							</form>
						</div><!-- End login-form -->  	
		       </div><!-- End pure-1-2 --> 
		       <div class="pure-u-3-5">
		       <h3>100 % Free Downloads</h3>
			            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			            
		      </div><!-- End pure-u-1-2 -->                
	       </div><!-- End pure-g-r -->
            @endif




<!--  Categories 
================================================ -->
	       <div>
            <h2 class="content-subhead">Categories</h2>
            
            <div class="categories-container pure-g-r">
            
            	<div class="pure-u-1-2">
	            	<div class="pure-g">
		            		<div class="pure-u-1-2">	
				            	<ul>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>	            	
				            	</ul>
				            </div>
			            
		            		<div class="pure-u-1-2">
				            	<ul>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>	            	
				            	</ul>
				            </div>
			          </div><!-- End pure-g -->  
			      </div><!-- End pure-u-1-2 -->  			            	

            	
            	<div class="pure-u-1-2">
	            	<div class="pure-g">
		            		<div class="pure-u-1-2">	
				            	<ul>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>	            	
				            	</ul>
				            </div>
			            
		            		<div class="pure-u-1-2">
				            	<ul>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>
					            	<li>Categories</li>	            	
				            	</ul>
				            </div>
			          </div><!-- End pure-g-r -->  
			      </div><!-- End pure-u-1-2 -->  

            </div><!-- End pure-g-r -->
            </div>                   
                  
                      
        </div><!-- End Content -->


@include('includes.footer')
@stop
