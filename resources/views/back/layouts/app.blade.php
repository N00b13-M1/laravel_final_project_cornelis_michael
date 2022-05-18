<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Educa - Education HTML Theme</title>


	<link href='{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}' rel='stylesheet' type='text/css'>
	<link href='{{ url('https://fonts.googleapis.com/css?family=Roboto:400,300,500,700') }}' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap_back.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icon-font.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/educa.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body class='max-h-screen'>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>

