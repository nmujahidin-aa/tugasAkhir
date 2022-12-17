<!DOCTYPE html>
<html>
<head>
	@include('layout.Homepage.layoutHead')
</head>
<body>

	@include('sweetalert::alert')

	@include('layout.Homepage.layoutNavbarHome')

	<div style=" background-color: #e9ecef; min-height: 60vh; ">
		@yield('content')
	</div>


	@include('layout.Homepage.layoutFooter')
	@include('layout.Homepage.layoutScript')

	@yield("script")
</body>
</html>