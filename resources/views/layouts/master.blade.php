<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.ico">
	<meta name="author" content="codepixer">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Mappets</title>

	@include('layouts.includes.assets.fonts')
	@include('layouts.includes.assets.styles')

</head>

<body>
	<div id="app">
		<!-- start header Area -->
		@include('layouts.includes.header')
		<!-- end header Area -->

		@section('content')
		@show

		<!-- Start Footer Area -->
		@include('layouts.includes.footer')
		<!-- End Footer Area -->
	</div>

	@include('layouts.includes.assets.scripts')
	@section('javascript')
	@show
</body>

</html>