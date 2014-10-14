

    <div class="header top-band">
        <div class="pure-menu pure-menu-open pure-menu-horizontal member-login">      
            <ul class="fl">
                <li><a href="#">Stockfree</a></li>
                <li><a href="#">English</a></li>
            </ul>
            <ul class="fr">
                <li><a class="start-downloading" href="#">Start Downloading</a></li> <span>|</span>
                <li>
			        <!--  twitter login 
					================================================ -->
		   	        <!-- Login Starts Here -->
		            <div id="loginContainer">
		                <a href="#" id="loginButton"><span>Login</span><em></em></a>
		                <div style="clear:both"></div>
		                <div id="loginBox">                
		                    <form id="loginForm"  method="POST" action="/auth/login">
		                        <fieldset id="body">
		                            <fieldset>
		                                <label for="email">Email Address</label>
		                                <input type="text" name="email" id="email" />
		                            </fieldset>
		                            <fieldset>
		                                <label for="password">Password</label>
		                                <input type="password" name="pass" id="password" />
		                            </fieldset>
		                            <input type="submit" id="login" value="Sign in" />
		                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
		                        </fieldset>
		                        <span><a href="#">Forgot your password?</a></span>
		                    </form>
		                </div>
		            </div>
		            <!-- Login Ends Here -->
		         </li>
            </ul>
            <div class="spacer"></div>
        </div>
    </div>


        <header class="header">
	        <div class="pure-g">
	            <h1 class="pure-u-6-24">Stockfree</h1>
	            <div class="main-search-form pure-u-18-24">
		           <form class="pure-form" action="/search" method="get">

		           <!--  Refine Search Dropdown
			           ================================================ -->
						<!--
							<div class="refine-search-dropdown">
							<div id="dd" class="wrapper-dropdown-3" tabindex="1">
							    <span>Refine Search</span>
							    <ul class="dropdown advanced-search">
							     form goes here.....
							     <ul>
							</div>Images
							</div>
-->

		<!-- <span class="example" data-dropdown="#dropdown-2">Example</span> -->
		<button class="pure-button example" data-dropdown="#dropdown-2">Refine Selection</button>

		 <div id="dropdown-2" class="dropdown dropdown-tip">
			<ul class="dropdown-menu">
<!-- Category
=============================== -->
		<li class="search_category">
			<h4>Category</h4>
			<div>
				<select name="search_category">
					<option value="">Any Category</option>
						<option value="Abstract">
							Abstract
						</option>
						<option value="Advertising">
							Advertising
						</option>
						<option value="Agriculture">
							Agriculture
						</option>
						<option value="Animals Wildlife">
							Animals Wildlife
						</option>
						<option value="Arts & Entertainment">
							Arts & Entertainment
						</option>
						<option value="Backgrounds & Textures">
							Backgrounds & Textures
						</option>
						<option value="Business & Finance">
							Business & Finance
						</option>
						<option value="Building & Architecture">
							Building & Architecture
						</option>
						<option value="IT & Communication">
							IT & Communication
						</option>
						<option value="Illustrations & Clip Art">
							Illustrations & Clip Art
						</option>
						<option value="Interiors">
							Interiors
						</option>
						<option value="Education">
							Education
						</option>
						<option value="Family">
							Family
						</option>
						<option value="Fashion & Beauty">
							Fashion & Beauty
						</option>
						<option value="Fantasy">
							Fantasy
						</option>
						<option value="Food & Drink">
							Food & Drink
						</option>
						<option value="Furniture">
							Furniture
						</option>
						<option value="Holidays & Celebrations">
							Holidays & Celebrations
						</option>
						<option value="Industry">
							Industry
						</option>
						<option value="Logos Signs & Symbols">
							Logos Signs & Symbols
						</option>
						<option value="Medical & Health">
							Medical & Health
						</option>
						<option value="Military">
							Military
						</option>
						<option value="Miscellaneous">
							Miscellaneous
						</option>
						<option value="Music & Instraments">
							Music & Instraments
						</option>
						<option value="Nature">
							Nature
						</option>
						<option value="Objects & Shapes">
							Objects & Shapes
						</option>
						<option value="Parks & Outdoors">
							Parks & Outdoors
						</option>
						<option value="Plants & Trees">
							Plants & Trees
						</option>
						<option value="People">
							People
						</option>
						<option value="Religion & Politics">
							Religion & Politics
						</option>
						<option value="Science">
							Science
						</option>
						<option value="Sci-Fi">
							Sci-Fi
						</option>
						<option value="Sports & Recreation">
							Sports & Recreation
						</option>
						<option value="Streets Cityscapes Locations">
							Streets Cityscapes Locations
						</option>
						<option value="Technology">
							Technology
						</option>
						<option value="Tools & Equipment">
							Tools & Equipment
						</option>
						<option value="Transportation">
							Transportation
						</option>
						<option value="Vectors">
							Vectors
						</option>
						<option value="Vintage">
							Vintage
						</option>
						<option value="3D Images">
							3D Images
						</option>
				</select>
			</div>
		</li><!-- End Category  -->


<!-- Media Type
=============================== -->
		<li class="media_type">
			<h4>Image Type</h4>
			<div>
				<label>
					<input type="radio" name="image_type" value="all" checked="">
					All Images
				</label>
				<label>
					<input type="radio" name="image_type" value="images">
					Image
				</label>
				<label>
					<input type="radio" name="image_type" value="psd">
					PSD
				</label>
				<label>
					<input type="radio" name="image_type" value="illustrations">
					Illustrations
				</label>
			</div>
		</li><!-- End Media Type  -->

<!-- Orientation
=============================== -->
		<li class="orientation">
			<h4>Orientation</h4>
			<div>
				<label>
					<input type="radio" name="orientation" value="portrait">
					Portrait
				</label>
				<label>
					<input type="radio" name="orientation" value="landscape">
					Landscape
				</label>
				<label>
					<input type="radio" name="orientation" value="square">
					Square
				</label>
			</div>
		</li><!-- End Orientation  -->


<!-- Exclude Keywords
=============================== -->
		<li class="exclude-keywords">
			<h4>Exclude Keywords</h4>
			<div>
				<label>
					<input type="text" name="exclude_keywords" value="" placeholder="Exclude Words">
				</label>
			</div>
		</li><!-- End Exclude Keywords  -->

<!-- Contributor Name
=============================== -->
		<li class="contributor-name">
			<h4>Contributor Name</h4>
			<div>
				<label>
					<input type="text" name="contributor-name" value="" placeholder="Contributor Name">
				</label>
			</div>
		</li><!-- End Contributor Name  -->

<!-- People
=============================== -->
		<li class="people">
			<h4>People</h4>
			<div>
                <label>
                    <input type="radio" name="people">
                    Only Images with People
                </label>
                <label>
                    <input type="radio" name="people">
                    Exclude People
                </label>
				<label>
				<div class="more_people">
					<select name="people_gender">
						<option value="">Any Gender</option>
							<option value="male">
								Male
							</option>
							<option value="female">
								Female
							</option>
							<option value="both">
								Both Genders
							</option>
					</select>
				</div>
				</label>
				<label>
				<div>
					<select name="people_number">
						    <option value="0">
                                None
							<option value="1">
								1 Person
							</option>
							<option value="2">
								2 People
							</option>
							<option value="3">
								3 People
							</option>
							<option value="4">
								4+ People
							</option>
					</select>
				</div>
				</label>
			</div>
		</li><!-- End people  -->

<!-- Editorial
=============================== -->
		<li class="editorial">
			<h4>Editorial</h4>
			<div>
				<label>
                    <input type="radio" name="editorial" value="1">
                    Editorial
                </label>
                <label>
                    <input type="radio" name="editorial" value="2">
					Non-Editorial
				</label>
			</div>
		</li><!-- End editorial  -->


<!-- Color
=============================== -->
		<li class="color">
			<h4>Color</h4>
			<div>
				<select name="color">
					<option value="">Select a color</option>
						<option value="red">
							Red
						</option>
						<option value="green">
							Green
						</option>
						<option value="blue">
							Blue
					</option>
				</select>
			</div>
		<li><!-- End editorial  -->

<!-- submit & Clear
=============================== -->
		<li class="sub-clear">
			<input class="button-success pure-button" name="secondary_submit" type="submit" value="Search">
			<input class="pure-button button_clear" type="button"  value="Clear">
		</li>



			</ul>
		</div>




			           - <input type="text" name="search-term" placeholder="Search images, vectors and more" class="main-search-form-width">
			           <button type="submit" value="search" class="button-success pure-button">Search</button>
			       </form>
	            </div><!-- End main search -->
	        </div><!-- End pure-g -->
        </header>
