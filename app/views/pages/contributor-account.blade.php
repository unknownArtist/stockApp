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
				<li><a href="/user/image/upload">Upload Image</a></li>
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
			<h2>{{Gravatar::image(Sentry::getUser()->email, 'Some picture', array('width' => 100, 'height' => 100))}}</h2>
			<ul>
				<li>{{ $details->first_name." ".$details->last_name }}</li>
				<li>{{ $details->address }}</li>
				<li>{{ $details->city }}</li>
				<li>{{ $details->state }}</li>
				<li>{{ $details->phone }}</li>
			</ul>
			<h2>Download Stats: {{ $download_count }} Downloads</h2>

			<h2>Most Recent Views</h2>
			<div class="pure-g-r search-results-container">
	            @if(!empty($recentViewedImages))
		            @foreach($recentViewedImages as $image)
		            	<figure class="search-item">
		                <div class="thumb-container">
		                    <a href=""><img class="pure-img-responsive"
		                                src="/uploads/thumbnail/{{$image->image_name}}"
		                                alt="Peyto Lake" id="thumbnail-1234567"
		                                width="190" height="190">
		                    </a>
		                </div>
		                </figure>
		            @endforeach
	            @else
	                {{ "No history found" }}
	            @endif
            </div>
			<h2>Most Recent Downloads</h2>
			<div class="pure-g-r search-results-container">
	            @if(!empty($recentDownloadedImages))
		            @foreach($recentDownloadedImages as $image)
		            	<figure class="search-item">
		                <div class="thumb-container">
		                    <a href=""><img class="pure-img-responsive"
		                                src="/uploads/thumbnail/{{$image->image_name}}"
		                                alt="Peyto Lake" id="thumbnail-1234567"
		                                width="190" height="190">
		                    </a>
		                </div>
		                </figure>
		            @endforeach
	            @else
	                {{ "No history found" }}
	            @endif
            </div>
		</div>
	</div><!-- End pure-u-14-24 -->
	</div><!-- End pure-g -->
	
	</div><!-- End content -->


		
	@include('includes.footer')
@stop
