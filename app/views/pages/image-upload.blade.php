@extends('layouts.master')
@section('content')
@include('includes.header-reg')
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

					<form class="pure-form pure-form-aligned" method="POST" action="/user/image/upload" enctype="multipart/form-data">
					    <fieldset>
					        <div class="pure-control-group">
					            <label for="image-name">Image Name</label>
                                {{ Form::text("image_name",Input::old("image_name"),array('id'=>'image-name','placeholder'=>'Frog on a pond')) }}
					        </div>


					        <div class="pure-control-group">
					            <label for="description">Description:</label>
					            {{ Form::textarea("description",Input::old("description"),array('id'=>'description','placeholder'=>'Four frogs in a pond sitting on lilly leafs.')) }}
                            </div>

<!--  Category
==================== -->
					        <div class="pure-control-group">
					            <label for="category">Category</label>
					            {{ Form::select('category',$categories) }}
					        </div>


<!--  Tags
==================== -->
					         <div class="pure-control-group" >
					            <label for="image-tags">Tags</label>
                                {{ Form::textarea("tags",Input::old("tags"),
                                	array('id'=>'tag-name','autocomplete'=>'off',
                                	'placeholder'=>'frog,pound,etc','cols'=>'25','rows'=>'4'))
                                }}
					       </div>


<!--  Number of People
==================== -->
                            <div class="pure-control-group pure-align">
                                <label for="select-people">Number of people </label>
                                {{ Form::select('people_number', array("" => 'None', 1 => '1 Person',2 => '2 People',3 => '3 People', 4 => '4+ People')) }}
                            </div>

<!--  Ethnicity
==================== -->
					        <div class="pure-control-group pure-align">
					       		<label for="select-people">Ethnicity </label>
                                {{ Form::select('people_ethnicity', array(''=>'Any Ethnicity','caucasian'=>'Caucasian','african_american'=>'African American','asian'=>'Asian','hispanic'=>'Hispanic','middle_eastern' => 'Middle Eastern'),Input::old('people_ethnicity')) }}
					        </div>


<!--  Gender
==================== -->
					        <div class="pure-control-group pure-align">
					       		<label for="select-people">Gender </label>
                                {{ Form::select('people_gender', array('' => 'Any Gender', 'male' => 'Male','female'=>'Female','both'=>'Both Genders'),Input::old('people_gender')) }}
							</div>

<!--  Age
==================== -->
					        <div class="pure-control-group pure-align">
					       		<label for="select-people">Age </label>
                                {{ Form::select('people_age', array('all_ages'=>'All Ages','infants'=>'Babies','children'=>'Children','teenagers'=>'Teenagers','20s'=>'Age 20-30','30s' => 'Age 30-50','30s'=>'Age 30-50','50s'=>'Age 50-70','older'=>'Age 70+'),Input::old('people_ethnicity')) }}
					       </div>

<!--  Editorial
==================== -->
					        <div class="pure-control-group pure-align">
					       		<label for="editorial">Editorial</label>
                                {{ Form::select('editorial', array(2 => 'Non Editorial', 1 => 'Editorial'),Input::old('editorial')) }}
								</div>


<!--  Color
==================== -->
					        <div class="pure-control-group pure-align">
					            <label for="color">Color</label>
                                {{ Form::select('color', array('None' => 'None', 'red' => 'Red','green'=>'Green','blue'=>'Blue'),Input::old('color')) }}
					        </div>


<!--  Terms and conditions
==================== -->
					        <div class="pure-control-group pure-align-file">
					            <label for="file">Select Image</label>
					            <input  type="file" name="image" id="file">
					        </div>

					        <div class="pure-controls">
					            <label for="cb" class="pure-checkbox">
					                <input name="termsandconditions" id="cb" type="checkbox"> I've read the terms and conditions
					            </label
					        </div>


					        <input class="pure-button pure-button-primary" type="submit" id="upload-image" value= {{ Lang::get('menu.uploadImage') }} />

					        </div>
					    </fieldset>
					</form>
				</div><!-- End upload-image -->
			</div><!-- End pure-u-18-24 -->
		</div><!-- End pure-g -->
	</div><!-- End content -->


@stop