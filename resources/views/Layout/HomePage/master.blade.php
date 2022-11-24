<!DOCTYPE html>
<html>
<head>
	@include('layout.Homepage.layoutHead')
</head>
<body>

	@include('sweetalert::alert')

	@include('layout.Homepage.layoutNavbarHome')

	@yield('content')


	@include('layout.Homepage.layoutFooter')
	@include('layout.Homepage.layoutScript')

	@yield("script")
</body>
</html>