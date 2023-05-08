<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="icon" href="{{ asset('img/Logo.png') }}"/>
  	@include('general.style')
  	@yield('style')
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<title>@yield('title')</title>
</head>
<body>
	@include('general.header')

	@if (Route::currentRouteName() === 'home')
	    @include('general.hero')
	@endif
	@if (Route::currentRouteName() === 'all.articles')
	    @include('general.hero2')
	@endif
	@if (Route::currentRouteName() === 'all.portfolios')
	    @include('general.hero3')
	@endif
	
	@include('general.modalLogin')
	@include('general.modalRegister')
	@yield('content')
	@include('general.footer')
	@include('general.script')
	@yield('script')
</body>
</html>