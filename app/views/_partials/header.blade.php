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
                @if( Sentry::check())  
                    <li><a class="dir" href="{{ Url::route('lfcsystems.index') }}">Home</a></li>
                    @if(Sentry::getUser()->hasAccess('admin.menu'))
                    <li>
                        <a href="#">Manage</a>
                        <ul class="sf-submenu">
                            <li><a href="{{ URL::route('users.index') }}">Users</a>
                                <ul>
                                    <li><a href="{{ URL::route('users.index') }}">List</a></li>
                                    <li><a href="{{ URL::route('users.create') }}">Create</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ URL::route('groups.index') }}">Groups</a>
                                <ul>
                                    <li><a href="{{ URL::route('groups.index') }}">List</a></li>
                                    <li><a href="{{ URL::route('groups.create') }}">Create</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ URL::route('permissions.index') }}">Permissions</a>
                                <ul>
                                    <li><a href="{{ URL::route('permissions.index') }}">List</a></li>
                                    <li><a href="{{ URL::route('permissions.create') }}">Create</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ URL::route('employees.index') }}">Employees</a>
                                <ul>
                                    <li><a href="{{ URL::route('employees.index') }}">List</a></li>
                                    <li><a href="{{ URL::route('employees.create') }}">Create</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(Sentry::getUser()->hasAccess('audit.menu') )
                    <li>
                        <a href="#">Audit</a>
                        <ul class="sf-submenu">
                            <li><a href="table.php">Employees</a></li>
                            <li><a href="icons.php">Systems</a></li>
                        </ul>
                    </li>
                    @endif
                @endif    
            </ul>
        </div>