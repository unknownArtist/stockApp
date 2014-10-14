<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name={{ "description" }}>
<title>{{ "title" }}</title>


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
<link rel="stylesheet" href="{{ URL::asset('css/tags.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jquery.dropdown.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="http://yui.yahooapis.com/3.16.0/build/yui/yui-min.js"></script>
<script src="{{ URL::asset('js/jquery.dropdown.js')}}"></script>
<script src="{{ URL::asset('js/login.js')}}"></script>
<script src="{{ URL::asset('js/search.js')}}"></script>

<!-- <script src="{{ URL::asset('js/tags.js')}}"></script> -->

<!-- Comma Separated Text Area Links -->

<script src="{{ URL::asset('js/tagSearchLibraries/jquery.smart_autocomplete.js')}}"></script>
<script src="{{ URL::asset('js/tagSearchLibraries/qs_score.js')}}"></script>
<script src="{{ URL::asset('js/commaTags.js')}}"></script>

<!-- End Comma Separated Text Area Links-->

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js"></script>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">



    <script>
        YUI({
            classNamePrefix: 'pure'
        }).use('gallery-sm-menu', function (Y) {

                var horizontalMenu = new Y.Menu({
                    container         : '.main-navigation',
                    sourceNode        : '.std-menu-items',
                    orientation       : 'horizontal',
                    hideOnOutsideClick: false,
                    hideOnClick       : false
                });

                horizontalMenu.render();
                horizontalMenu.show();

            });
        YUI({
            classNamePrefix: 'pure'
        }).use('gallery-sm-menu', function (Y) {

                var horizontalMenu = new Y.Menu({
                    container         : '.sec-navigation',
                    sourceNode        : '.sec-menu-items',
                    orientation       : 'horizontal',
                    hideOnOutsideClick: false,
                    hideOnClick       : false
                });

                horizontalMenu.render();
                horizontalMenu.show();

            });
    </script>
    <div>{{ Toastr::render() }}</div>


</head>
<body>
<div id="main">
	@yield('content')
</div><!-- End Main -->
<script src=""></script>
</body>
</html>
