<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		       
		<link rel="shortcut icon" href="favicon.ico"/> 
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
		@yield('custom_css')     
		<title>Nongkrong.id | @yield('title')</title>
	</head>
<body data-color="theme-1">
 
  <div class="loading">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_four"></div>
			<div class="object object_three"></div>
			<div class="object object_two"></div>
			<div class="object object_one"></div>
		</div>
	</div>
  </div>
  
  @include('front.partials.nav')
  
	@yield('content')     
       
  @include('front.partials.footer')

	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/idangerous.swiper.min.js') }}"></script>
	<script src="{{ asset('js/jquery.viewportchecker.min.js') }}"></script>
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
	<script src="{{ asset('js/all.js') }}"></script>
	@yield('custom_js')
</body>
</html>