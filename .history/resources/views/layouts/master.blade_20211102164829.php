<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Real Estate Builders Free Responsive Website Templates - icon">
	<meta name="author" content="webThemez.com">
	<title>Real Estate Builders Free Responsive Website - icon</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel='stylesheet' id='camera-css'  href='{{ asset('assets/css/camera.css') }}' type='text/css' media='all'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->


	<!-- /.navbar -->
      @include('partials.nav')
	<!-- Header -->
	   @yield('toto')
	<!-- /Header -->

     @yield('content')


   @include('partials.footer')






</body>
</html>
