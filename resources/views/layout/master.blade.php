<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

	<head>
		@include('layout.header')
	</head>

	<body>
		@include('flash::message')
		@include('layout.navbar')
		@yield('content')
		@include('layout.footer')
	</body>

</html>