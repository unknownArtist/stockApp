 @if(Sentry::check())
    @if(Sentry::getUser()->contributor)
    	@include('includes.menu-contributor')
    @else
    	@include('includes.menu-member')
	@endif
	
@else
    @include('includes.menu-public')
@endif
<!--  Header-reg - Top Nav
================================================ -->




<!--  Logo
================================================ -->
    <header class="header">
        <div class="">
            <h1 class="logo">Stockfree</h1>
        </div>
    </header>