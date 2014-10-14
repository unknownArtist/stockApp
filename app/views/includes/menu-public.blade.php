
<!--  Header-reg - Top Nav
================================================ -->
    <div class="header top-band">
    	<div class="pure-g-r">
		<div class="pure-u-1-2">
	        <div class="pure-menu pure-menu-open pure-menu-horizontal main-navigation">
	            <ul class="std-menu-items">
	                <li>
		                <!-- <a href="#" class="pure-menu-heading">Stockfree</a> -->
		                {{ link_to_route('home', 'Stockfree', array(), array('class' => 'pure-menu-heading')) }}
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
		                <li>{{ link_to_route('become-a-member', 'Become a Member', array(), array('class' => 'pure-menu-heading members-menu')) }}
		                </li>
	               <ul><!-- End std-menu-item -->
               </div><!-- End pure-menu -->
		  </div>
		  </div>

    </div><!-- End header top-band -->


    <div class="twitter-login">
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
                        <label for="email">Username</label>
                        <input type="text" name="username" id="username" />
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
    </div>



