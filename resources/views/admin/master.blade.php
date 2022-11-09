<!DOCTYPE html>
<html>

<head>
    @include('users.template.head')
</head>

<body>
    @include('admin.template.sidebar')

    <div class="mt-5" style="min-height: 70vh;">
        @yield('content')
    </div>
    @include('users.template.script')
</body>

</html>