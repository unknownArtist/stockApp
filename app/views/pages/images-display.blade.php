@extends('layouts.master')
@section('content')
	@include('includes.header-search')
	
<!--  Images Page 
================================================ -->
	<div class="content">			
	
	<div class="pure-g-r well">
		<div class="pure-u-1-2">
			<div class="main-image fr">

			<h2> {{ ImageModel::unSlugify($images[0]->slug) }}</h2>
				<figure>
					<img src="/uploads/medium/{{$images[0]->image_name}}">
				</div>
			</figure>
			
		</div><!-- End registration -->
			<div class="pure-u-1-2">
				<div class="image-meta-data">
				
					<h2>Image Name</h2>
					<p>Image ID: {{$images[0]->id}}</p>
					<p>categories: 
                    <span>
                    @foreach($images as $image)
                        @if($image->category_name)
                            {{ $image->category_name }}
                        @else
                            {{ "None" }}
                        @endif
                    @endforeach
					</span>
                    <p>Tags: <span>
                            @foreach(ImageModel::find($images[0]->id)->tags()->get() as $tag)
                                 {{ $tag->tag_name }},
                            @endforeach

                    </span></p>
					<p>Image Orientation: <span>{{ $image->orientation }}</span></p>
					<p>Image Type: <span>{{ $image->image_type }}</span></p>
					<p>Total Downloads ( {{$downloaded}} )/Views ( {{ $views }} )</p>
					<p>{{ Helpers::getFullUserName($image->user_id)}} </p>
					<a href="/image/{{$images[0]->id}}/download/{{$images[0]->image_name}}"
                        class="pure-button button-success">Download</a>
				</div>
			</div>
		</div><!-- End pure-g -->
		
	<div class="pure-u-1">
		<h3>Same Contributor</h3>
	</div>
	
	<div class="pure-u-1">
		<h3>Similar Images</h3>
	</div>	
		
	</div><!-- End content -->
<script>
    $(document).ready(function(){
        $('#downloadImg').click(function(){
            $.ajax({
                type: 'POST',
                url: "/image/{{$images[0]->id}}/download"
            });

        });
        return false;

    });
</script>
	@include('includes.footer')
@stop
