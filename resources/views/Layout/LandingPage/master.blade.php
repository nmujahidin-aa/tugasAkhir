<!DOCTYPE html>
<html>
<head>
	@include('layout.landingPage.layoutHead')
</head>
<body>
	@include('layout.landingPage.layoutNavbar')

	@yield('content')

	@include('layout.landingPage.layoutFooter')
	@include('layout.landingPage.layoutScript')
</body>
</html>