<!DOCTYPE html>
<html>
<head>
	@include('layout.Homepage.layoutHead')
</head>
<body>
	@include('layout.Homepage.layoutNavbarHome')

	@yield('content')

	@include('layout.Homepage.layoutScript')
</body>
</html>