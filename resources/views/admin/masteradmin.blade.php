<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.AdminPage.adminhead')
    </head>

    <body>
        @include('sweetalert::alert')
        <div class="wrapper">
            @include('admin.adminnav')

            <div class="main">
                @include('admin.adminheader')

                <main class="content">@yield('content')</main>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    <a
                                        class="text-muted"
                                        href="https://adminkit.io/"
                                        target="_blank"
                                        ><strong>Rumah Pustaka</strong></a
                                    >
                                    -
                                    <a
                                        class="text-muted"
                                        href="https://adminkit.io/"
                                        target="_blank"
                                        ><strong
                                            >Melihat Dunia Dalam Satu Kali Tekan</strong
                                        ></a
                                    >
                                    &copy;
                                </p>
                            </div>
                            <div class="col-6 text-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a
                                            class="text-muted"
                                            href="https://adminkit.io/"
                                            target="_blank"
                                            >Support</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a
                                            class="text-muted"
                                            href="https://adminkit.io/"
                                            target="_blank"
                                            >Help Center</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a
                                            class="text-muted"
                                            href="https://adminkit.io/"
                                            target="_blank"
                                            >Privacy</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a
                                            class="text-muted"
                                            href="https://adminkit.io/"
                                            target="_blank"
                                            >Terms</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin.adminscript')
    </body>
</html>
