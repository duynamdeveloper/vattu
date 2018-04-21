<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti:400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@yield('styles')
</head>
<body>
@yield('header')
@yield('main')
@yield('footer')
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
@yield('plugin-scripts')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('custom-scripts')
</body>
</html>