<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>{{ settings('SITE_NAME') }}</title>	
		<meta name="description" content="{{ settings('META_DESCRIPTIONS') }}">
        <meta name="keywords" content="{{ settings('META_KEYWORDS') }}">		
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/owl.theme.css') }}">
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/flexslider.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/main.css') }}">	
		<link rel="stylesheet" href="{{ asset('/public/front/assets/css/custom.css') }}">	
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!--[if lt IE 9]>
					<script src="/public/front/assets/js/html5shiv.js"></script>
					<script src="/public/front/assets/js/respond.js"></script>
				<![endif]-->

				<!--[if IE 8]>
					<script src="/public/front/assets/js/selectivizr.js"></script>
				<![endif]-->
</head>
<body>
	<nav id="top" class="navbar navbar-default navbar-fixed-top">
		@include('front.includes.header') 		
	</nav>
	<div class="offer-cta">
		@include('front.includes.our_offer')	
	</div> <!-- /.offer-cta -->
	
	@yield('content')

	<div class="subscribe section-wrapper">
		@include('front.includes.newsletter')		
	</div> <!-- /.subscribe -->
		
	<footer>
		@include('front.includes.footer') 			
	</footer>


	<script src="{{ asset('/public/front/assets/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('/public/front/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/public/front/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/public/front/assets/js/contact.js') }}"></script>
	<script src="{{ asset('/public/front/assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('/public/front/assets/js/script.js') }}"></script>






</body>
</html>