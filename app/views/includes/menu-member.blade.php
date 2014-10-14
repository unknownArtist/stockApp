<!--  Header-reg - Top Nav
================================================ -->
    <div class="header top-band">
    	<div class="pure-g-r">
		<div class="pure-u-1-2">
	        <div class="pure-menu pure-menu-open pure-menu-horizontal main-navigation">
	            <ul class="std-menu-items">
	                <li>
		                <a href="#" class="pure-menu-heading">Stockfree</a>
		                 <ul id="">
			                <li>{{ link_to_route('about', Lang::get('menu.about')) }}</li>
			                <li>{{ link_to_route('how-it-works', Lang::get('menu.howItWorks')) }}</li>
			                <li>{{ link_to_route('contributing', Lang::get('menu.contributing')) }}</li>
			                <li>{{ link_to_route('faq', Lang::get('menu.faq')) }}</li>
			                <li>{{ link_to_route('contact', Lang::get('menu.contact')) }}</li>
				         </ul>
		            </li>
	                <li>
	                	<a href="/user/lang/en" class="pure-menu-heading">English</a>
	            	    <ul id="">
			                <li><a href="#">Deutsch</a></li>
			                <li><a href="/user/lang/dch">Dutch</a></li>
			                <li><a href="/user/lang/gr">German</a></li>
			                <li><a href="/user/lang/es">Espanol</a></li>
			                <li><a href="/user/lang/fr">Francais</a></li>
			                <li><a href="#">Italiano</a></li>
			                <li><a href="#">Lang-1</a></li>
			                <li><a href="#">Lang-2</a></li>
			                <li><a href="#">Lang-3</a></li>
			                <li><a href="#">Lang-4</a></li>
			                <li><a href="#">Lang-5</a></li>
			                <li><a href="#">Lang-6</a></li>
			                <li><a href="#">Lang-7</a></li>
			                <li><a href="#">Lang-8</a></li>
			                <li><a href="#">Lang-9</a></li>
			                <li><a href="#">Lang-10</a></li>
			                <li><a href="#">Lang-11</a></li>
			                <li><a href="#">Lang-12</a></li>
			                <li><a href="#">Lang-13</a></li>
			                <li><a href="#">Lang-14</a></li>
			                <li><a href="#">Lang-15</a></li>
			            </ul>
	                </li>
			      </ul><!-- End std-menu-item -->
			  </div><!-- End pure-menu -->
		  </div>


		  <div class="pure-u-1-2">
		      <div class="pure-menu pure-menu-open pure-menu-horizontal sec-navigation pure-menu-pull-right">
			      <ul class="sec-menu-items">
		                <li>
                            <a href="">Start Downloading / {{ Helpers::getFullUserName()}}</a>
		                		<!-- <a class="pure-menu-heading members-menu" href="#">Start Downloading/{{ Sentry::getUser()->username }}</a> -->
					             <ul id="">
					                <li><a href="/contributor/account/{{Sentry::getUser()->id}}/details">Account Details</a></li>
					                <li><a href="/contributor/registration">Become a Contributor</a></li>
					                <li><a href="/auth/logout">Sign Out</a></li>
						         </ul>
		                </li>
	               <ul><!-- End std-menu-item -->
               </div><!-- End pure-menu -->
		  </div>
		  </div>

    </div><!-- End header top-band -->

