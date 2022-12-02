{{-- Ini sidebar --}}

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Rumah Pustaka</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages </li>
            <li class="sidebar-item @if(request()->routeIs('exdashboard')) active @endif">
                <a class="sidebar-link" href="{{route('exdashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> 
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item @if(request()->routeIs('dashboard.users.index')) active @endif">
                <a class="sidebar-link" href="{{route('dashboard.users.index')}}">
                    <i class="align-middle" data-feather="user"></i> 
                    <span class="align-middle">Userlist</span>
                </a>
            </li>

            <li class="sidebar-item @if(request()->routeIs('dashboard.categories.index')) active @endif">
                <a class="sidebar-link" href="{{route('dashboard.categories.index')}}">
                    <i class="align-middle" data-feather="log-in"></i> 
                    <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item @if(request()->routeIs('dashboard.books.index')) active @endif">
                <a class="sidebar-link" href="{{route('dashboard.books.index')}}">
                    <i class="align-middle" data-feather="log-in"></i> 
                    <span class="align-middle">Books</span>
                </a>
            </li>

            <li class="sidebar-item @if(request()->routeIs('dashboard.faqs.index')) active @endif">
                <a class="sidebar-link" href="{{route('dashboard.faqs.index')}}">
                    <i class="align-middle" data-feather="user-plus"></i> 
                    <span class="align-middle">FAQ</span>
                </a>
            </li>

            <li class="sidebar-item @if(request()->routeIs('dashboard.testimonials.index')) active @endif">
                <a class="sidebar-link" href="{{route('dashboard.testimonials.index')}}">
                    <i class="align-middle" data-feather="user-plus"></i> 
                    <span class="align-middle">Testimonial</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    <i class="align-middle" data-feather="user-plus"></i> 
                    <span class="align-middle">About me</span>
                </a>
            </li>

        </ul>
    </div>
</nav>