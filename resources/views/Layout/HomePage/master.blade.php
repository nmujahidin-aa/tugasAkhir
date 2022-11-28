<!DOCTYPE html>
<html>
<head>
	@include('layout.Homepage.layoutHead')
</head>
<body>

	@include('sweetalert::alert')

	@include('layout.Homepage.layoutNavbarHome')

	<div style="min-height: 100vh; background: #e9ecef;">
		@yield('content')
	</div>


	@include('layout.Homepage.layoutFooter')
	@include('layout.Homepage.layoutScript')

	@yield("script")
</body>
</html>