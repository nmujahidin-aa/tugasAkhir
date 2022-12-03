<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
              
            <li class="nav-item dropdown">

                <a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="@if(!empty(Auth::user()->avatar)) {{asset('storage/'.Auth::user()->avatar)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif"
                    class="avatar img-fluid rounded me-1"
                    alt="Charles Hall"/>
                    <span class="text-dark"><b>Hai, </b>{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('logout.post')}}">
                        <i class="align-middle" data-feather="log-out"></i>
                     Log out
                    </a >
                </div>
            </li>
        </ul>
    </div>
</nav>