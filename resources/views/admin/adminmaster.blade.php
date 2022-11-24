<!DOCTYPE html>
<html>

<head>
    @include('layout.AdminPage.adminhead')
</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        @include('layout.AdminPage.layoutsidebar')

        @yield('content')
    </div>

    @include('layout.landingPage.layoutScript')
</body>

</html>