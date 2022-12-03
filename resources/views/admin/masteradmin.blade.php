<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.AdminPage.adminhead')
    </head>

    <body>
        @include('sweetalert::alert')
        <div class="wrapper">
            @include('admin.layout.sidebar')

            <div class="main">
                @include('admin.layout.header')

                <main class="content">@yield('content')</main>

                @include('admin.layout.footer')
            </div>
        </div>
        @include('admin.layout.script')
    </body>
</html>
