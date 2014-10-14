@extends('layouts.master')
@section('content')
	@include('includes.header-search')
	

		
		
<!--  Contributor Links 
================================================ -->
	<div class="content">			
	
	<div class="pure-g-r well">
		<div class="pure-u-6-24">
			<div class="member-menu">
				<h2>Quick Links</h2>
				<ul>
					<li><a href="#">Upload Image</a></li>
					<li><a href="#">contributor Account</a></li>
					<li><a href="#">Download History</a></li>
					<li><a href="#">Upload History</a></li>
					<li><a href="#">Reports Vies/Downloads</a></li>
					<li><a href="#">etc</a></li>
					<li><a href="#">etc</a></li>
				</ul>
			</div>
		</div><!-- End pure-6-24 -->
		<div class="pure-u-18-24">
		
<!--  Upload Form 
================================================ -->
			<div class="upload-image">
				<div class="hr">
					<h2>Upload Image</h2>
					<p>All fields Marked with an * must be filled in </p>
				</div>			
					
					<form class="pure-form pure-form-aligned">
					    <fieldset>
					        <div class="pure-control-group">
					            <label for="image-name">Image Name</label>
					            <input id="image-name" type="text" placeholder="Frog on a pond">
					        </div>
					
					        
					        <div class="pure-control-group">
					            <label for="description">Description:</label>
					            <textarea rows="4" cols="40" id="description" type="text" placeholder="Four frogs in a pond sitting on lilly leafs."></textarea>
				            </div>	
		
					
					        <div class="pure-control-group">
					            <label for="category">Category</label>
					            <select name="select_category">				            
								<option value="abstract">
									Abstract
								</option>
								<option value="advertising">
									Advertising
								</option>
								<option value="3">
									Agriculture
								</option>
								<option value="4">
									Animals Wildlife
								</option>
								<option value="5">
									Arts & Entertainment
								</option>
								<option value="6">
									Backgrounds & Textures
								</option>
								<option value="7">
									Business & Finance
								</option>
								<option value="8">
									Building & Architecture
								</option>
								<option value="9">
									IT & Communication
								</option>
								<option value="10">
									Illustrations & Clip Art
								</option>
								<option value="11">
									Interiors
								</option>
								<option value="12">
									Education
								</option>
								<option value="13">
									Family
								</option>
								<option value="14">
									Fashion & Beauty
								</option>
								<option value="15">
									Fantasy
								</option>
								<option value="16">
									Food & Drink
								</option>
								<option value="17">
									Furniture
								</option>
								<option value="18">
									Holidays & Celebrations
								</option>
								<option value="19">
									Industry
								</option>
								<option value="20">
									Logos Signs & Symbols
								</option>
								<option value="21">
									Medical & Health
								</option>
								<option value="22">
									Military
								</option>
								<option value="23">
									Miscellaneous
								</option>
								<option value="24">
									Music & Instraments
								</option>
								<option value="25">
									Nature
								</option>
								<option value="26">
									Objects & Shapes
								</option>
								<option value="27">
									Parks & Outdoors
								</option>
								<option value="28">
									Plants & Trees
								</option>
								<option value="29">
									People
								</option>
								<option value="30">
									Religion & Politics
								</option>
								<option value="31">
									Science
								</option>
								<option value="32">
									Sci-Fi
								</option>
								<option value="33">
									Sports & Recreation
								</option>
								<option value="34">
									Streets Cityscapes Locations 
								</option>
								<option value="35">
									Technology
								</option>
								<option value="36">
									Tools & Equipment
								</option>
								<option value="37">
									Transportation
								</option>
								<option value="38">
									Vectors
								</option>
								<option value="39">
									Vintage
								</option>
								<option value="40">
									3D Images
								</option>
						</select>
					        </div>
					        
		
		
					        <div class="pure-control-group">
					            <label for="image-tags">Tags</label>
					            <input id="tags" type="text" placeholder="four frogs, pond, lilly leaf, water, photo ">
					        </div>
		
					       <div class="pure-control-group">
					       	<label for="orientation">Orientation</label></div> 
					        <div class="pure-controls">
					            <label for="orientation" class="pure-checkbox checkbox-align">
									<input id="orientation" type="checkbox" name="portrait"> Portrait
								<label>
								<label for="orientation" class="pure-checkbox checkbox-align">
										<input id="orientation" type="checkbox" name="landscape"> landscape
								<label>
								<label for="orientation" class="pure-checkbox checkbox-align">
										<input id="orientation" type="checkbox" name="square"> Square
								<label>						
					        </div>
					        
					        
					        <div class="pure-control-group">
					       	<label for="select-people">People</label></div> 
					        <div class="pure-controls">
								<div>
									<label for="people" class="pure-checkbox checkbox-align">
										<input id="people" type="checkbox" name="include-people"> Only Images with People
									<label>
									<label for="people" class="pure-checkbox checkbox-align">
										<input id="people" type="checkbox" name="exclude-people"> Exclude People
									<label>
								</div>
					        </div>
					        
					        
					        <div class="pure-control-group">
					       	<label for="editorial">Editorial</label></div> 
					        <div class="pure-controls">
								<div>
									<label for="editorial" class="pure-checkbox checkbox-align">
										<input id="editorial" type="checkbox" name="include-editorial"> Editorial
									<label>
									<label for="editorial" class="pure-checkbox checkbox-align">
										<input id="editorial" type="checkbox" name="exclude-editorial"> Non Editorial
									<label>
								</div>
					        </div>
					        
					        
					        <div class="pure-control-group pure-align">
					            <label for="color">Color</label>
					            <select name="select_color">				            
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
					        
					        
					        <div class="pure-control-group pure-align-file">
					            <label for="file">Select Image</label>
					            <input type="file" name="file" id="file"> 
					        </div>
					        					        			
					        <div class="pure-controls">
					            <label for="cb" class="pure-checkbox">
					                <input id="cb" type="checkbox"> I've read the terms and conditions
					            </label
					        </div>

					
					        <input class="pure-button pure-button-primary" type="submit" id="upload-image" value="Upload Image" />
		
					        </div>
					    </fieldset>
					</form>	            
				</div><!-- End upload-image -->
			</div><!-- End pure-u-18-24 -->                      
		</div><!-- End pure-g -->
	</div><!-- End content -->


		

		
	@include('includes.footer')
@stop
