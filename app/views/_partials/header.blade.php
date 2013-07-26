<!DOCTYPE html>
<html lang="en">
<title>Standard Web Template</title>

<head>

    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/js/jquery-ui-1.10.3/themes/base/jquery.ui.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/flexigrid.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/forms.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/superfish.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/superfish-vertical.css') }}" rel="stylesheet">

   
    <script src="{{ URL::asset('assets/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-ui-1.10.3/ui/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('assets/js/flexigrid.js') }}"></script>
    <script src="{{ URL::asset('assets/js/hoverIntent.js') }}"></script>
    <script src="{{ URL::asset('assets/js/superfish.js') }}"></script>
    <script src="{{ URL::asset('assets/js/sample.superfish.js') }}"></script>
    <script src="{{ URL::asset('assets/js/sample.tabs.js') }}"></script>
	
	<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
	
</head>
<body>
    <div id="wrapper">
        <!--header-->
		<div id="top">
			<div class="right" style="color: white;">
                @if (Sentry::check())
                    {{ Sentry::getUser()->email }}
                    [<span class="top-link"> <a href="{{ URL::route('auths.logout') }}">Log Off</a> </span> ] 
                @endif 
				<span class="option">Helpdesk</span>
			</div>    
        </div>
		<div  style="clear: both;"></div>
		<div id="header">
            <div class="left">
                <h1 class="headertitle">Lapanday Management System</h1>
                <span class="titledesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </div>
                    
        </div>
        
        <!--menu-->
        <div id="menu">
            <ul class="sf-menu">
                <li><a class="dir" href="{{ Url::route('lfcsystems.index') }}">Home</a></li>
            </ul>
        </div>