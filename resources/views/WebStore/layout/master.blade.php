<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Papr">
	<meta name="twitter:creator" content="@Papr">
	<meta name="twitter:title" content="Papr">
	<meta name="twitter:description" content="Papr Trendy News and Megazine Template">
	<meta name="twitter:image" content="{{ asset('styleWeb/images/papr.png') }}">
	<!-- Facebook -->
	<meta property="og:url" content="">
	<meta property="og:title" content="Papr">
	<meta property="og:description" content="Papr Trendy News and Megazine Template">
	<meta property="og:type" content="website">
	<meta property="og:image" content="{{ asset('styleWeb/images/papr.png') }}">
	<meta property="og:image:secure_url" content="">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<title>@yield('titlePage')</title>
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('styleWeb/favicon/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('styleWeb/favicon/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('styleWeb/favicon/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('styleWeb/favicon/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('styleWeb/favicon/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('styleWeb/favicon/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('styleWeb/favicon/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('styleWeb/favicon/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('styleWeb/favicon/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('styleWeb/favicon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('styleWeb/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('styleWeb/favicon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('styleWeb/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('styleWeb/favicon/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('styleWeb/favicon/ms-icon-144x144.png') }}">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/iconfont.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/vendor/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/vendor/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/vendor/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styleWeb/css/style.css') }}">
	@yield('link')
</head>
<body>
	<div class="main-content">
		@include('WebStore.partial.header')
		@yield('content')
		@include('WebStore.partial.footer')
	</div>
	<script src="{{ asset('styleWeb/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/jquery-migrate.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/easing-1.3.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/slick.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/jquery.counterup.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('styleWeb/js/vendor/jquery.nicescroll.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>
	<script src="{{ asset('styleWeb/js/plugins.js') }}"></script>
	<script src="{{ asset('styleWeb/js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('styleWeb/js/getDate.js') }}"></script>
	@yield('script')
</body>
</html>
