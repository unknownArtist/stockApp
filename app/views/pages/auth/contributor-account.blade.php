@extends('layouts.master')
@section('content')
	@include('includes.header-reg')
	


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
	</div><!-- End pure-u-6-24 -->
	
<!--  Contributor Area 
================================================ -->	
	<div class="pure-u-18-24">
		<div class="member-area">
			<h2>Contributor Image</h2>
			<h2>Contributor Details</h2>
			<h2>Download Stats</h2>
			<h2>p2x most recent views</h2>
			<h2>p2x most recent downloads</h2>
		</div>
	</div><!-- End pure-u-14-24 -->
	</div><!-- End pure-g -->
	
	</div><!-- End content -->


		
	@include('includes.footer')
@stop
