@extends('layouts.master')
@section('content')
	@include('includes.header-search')


   


<!--  Sort By and Pagination
================================================ -->
<div class="content">

	<h1>Results Page - under construction</h1>

        <div class="sort-by">

	            <div class="pure-menu pure-menu-open pure-menu-horizontal sort-by-links">


		            <ul class="refine-links" id="sort-by-selector" initial-value="new">

			           <li class="selected" sort-by="new" title="sort images by new">
			                <a href="/search?search_type=new&{{ImageModel::getQueryString()}}">New</a>
			           </li><span> | </span>

                       <li class="selected" sort-by="popular" title="sort images by popular">
			                <a href="/search?search_type=popular&{{ImageModel::getQueryString()}}">Popular</a>
			           </li><span> | </span>

                       <li class="selected" sort-by="relavent" title="sort images by relavent">
			                <a href="/search?search_type=relavent&{{ImageModel::getQueryString()}}">Relavent</a>
			           </li><span> | </span>

                       <li class="selected" sort-by="random" title="sort images by random">
			                <a href="/search?search_type=random&{{ImageModel::getQueryString()}}">Random</a>
			           </li>

		            </ul>

		            <ul class="fr pagination">

			           <li>
                           <form action="">
                               Page: <input type="text" class="pagination-input" maxlength="6" value="1"> of 12345 Pagination
                           </form>
			           </li>

		            </ul>


		        </div>    		            
        </div>



<!--  Related Searches
================================================ -->
<div class="related-searches">
	<b>Suggested Tags: </b>
	@if(!empty($results))
	 {{ $i=0 }}

	 @foreach ($results->slice(0, 14) as $result)

       {{ $result->getTagsSuggestion($result['id']) }}

     @endforeach

	@else
         {{ "No match found" }}
    
    @endif

</div>

<!--  image results
================================================ -->
            <div class="pure-g-r search-results-container">
            @if(!empty($results))
            @foreach($results as $result)
            	<figure class="search-item">
                <div class="thumb-container">
                    <a href="/image/{{$result->id}}/{{$result->slug}}"><img class="pure-img-responsive"
                                src="uploads/thumbnail/{{$result->image_name}}"
                                alt="Peyto Lake" id="thumbnail-1234567"
                                width="190" height="190">
                    </a>
                </div>
                </figure>
            @endforeach
            @else
                {{ "No match found" }}
            @endif
            </div>

{{ $results->appends(ImageModel::getQueryString('paginate'))->links() }}

        <div class="sort-by">
	            <div class="pure-menu pure-menu-open pure-menu-horizontal sort-by-links">
		            <ul class="refine-links" id="sort-by-selector" initial-value="new">
			           <li class="selected" sort-by="new" title="sort images by new">
			           <a href="#">New</a>
			           </li><span> | </span>
			           <li class="selected" sort-by="popular" title="sort images by popular">
			           <a href="#">Popular</a>
			           </li><span> | </span>
			           <li class="selected" sort-by="relavent" title="sort images by relavent">
			           <a href="#">Relavent</a>
			           </li><span> | </span>
			           <li class="selected" sort-by="random" title="sort images by random">
			           <a href="#">Random</a>
			           </li>
		            </ul>		            
		            <ul class="fr pagination">
			           <li>
			           <form action="">
				           Page: 


<!--                           <input type="text" class="pagination-input" maxlength="6" value="1"> of 12345 Pagination-->
			           </form>
			           </li>
		            </ul>
		        </div>    		            
        </div>





<!--  List Categories
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
         
        </div><!-- End content -->        
      

	@include('includes.footer')
@stop