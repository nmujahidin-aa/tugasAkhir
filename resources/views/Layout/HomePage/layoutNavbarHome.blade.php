<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow-sm" id="navbar_top">
  <div class="container">
    <div class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile" aria-controls="menu-mobile" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;">
      <i class="bx bx-menu"></i>
    </div>
    <a class="navbar-brand logo-light" href="">
      <img src="{{URL::to('/')}}/image/logo.png" alt="Rumah Pustaka" height="40px">
    </a>
    <div class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent;">
      <i class="bx bx-search"></i>
    </div>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <div class="container" id="search-bar" style="display: none;">
        <div class="row height d-flex">
          <div class="col-md-11">
            <div class="search">
              <i class="bx bx-search"></i>
              <input type="text" class="form-control search-input" placeholder="search" spellcheck="false">
            </div>
          </div>
        </div>
      </div>
      <ul id="navbar-menu" class="navbar-nav my-2 me-5 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('homepage.index')) active @endif" aria-current="page" href="{{route('homepage.index')}} ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link @if(request()->routeIs('faq.index')) active @endif" aria-current="page" href="{{route('faq.index')}} ">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs('contact.index')) active @endif" aria-current="page" href="{{route('contact.index')}} ">Contact</a>
        </li>
      </ul>
      <div class=" ms-auto">
        <form class="input-group" action="{{route('homepage.index')}} ">
          <input type="text" class="form-control" id="search_val" placeholder="Search" name="search" aria-label="Search">
          <span class="input-group-text" id="btn_search" type="submit"><i class="fa fa-search"></i> </span>
        </form>
      </div>

      <div class="mx-2 dropdown">
        <a class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color: transparent;">
          <img src="@if(!empty(Auth::user()->avatar)) {{asset('storage/'.Auth::user()->avatar)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif" class="rounded-circle" style="height: 6vh; width: 6vh;">
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="{{route('user.profile.index')}} ">Profil Saya</a></li>
          <li><a class="dropdown-item" href="{{route('user.pustaka.index')}} ">Buku Saya</a></li>
          <hr>
          <li><a class="dropdown-item" href="{{route('logout.post')}} ">Keluar</a></li>
        </ul>
      </div>
      
      <ul id="navbar-menu" class="navbar-nav my-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          @if(!request()->routeIs('user.pustaka.create','user.pustaka.edit','user.pustaka.index'))
          <a href="{{route('user.pustaka.create')}} " class="btn btn-primary px-3" style="border-radius: 50px;"> Upload </a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Tampilan Phone -->

<div class="offcanvas offcanvas-top dark-bg" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasTopLabel">
  <!-- Offcanvas Header Start -->
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel" style="margin-left: 12px;">Cari</h5>
  </div>
  <!-- Offacnvas Header End -->

  <!-- Offcanvas Body Start-->
  <div class="offcanvas-body">
    <div class="container-fluid">
      <div class="row height d-flex">
        <div class="col-md-12">
          <form class="d-flex input-group">
            <input type="text" class="form-control" id="search_val" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
            <span class="input-group-text" id="btn_search"><i class="fa fa-search"></i></span>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanvas body end-->
</div>

<!-- Toggler Kiri -->
<div class="offcanvas offcanvas-start dark-bg" tabindex="-1" id="menu-mobile" aria-labelledby="menu-mobileLabel">
  <div class="offcanvas-header" style="margin-bottom: -30px;">
    <h5 class="offcanvas-title" id="menu-mobileLabel">
      <img src="{{URL::to('/')}}/image/logo.png" height="30" alt="Rupus">
    </h5>
    <button style="margin-top: 4px;" type="button" class="btn navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="bx bx-x"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <div class="mt-2 pt-2">
     
      
        <div class="container d-flex justify-content-center">
          <img src="@if(!empty(Auth::user()->avatar)) {{asset('storage/'.Auth::user()->avatar)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif" class="rounded-circle" style="height: 17vh;">
          </div>
        </div>

      <nav class="navbar container justify-content-center">
        <span><strong>Hai,</strong> {{Auth::user()->name}}</span>
        <div class="pt-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent">
          <i class="bx bx-chevron-down fs-5"></i>
        </div>
      </nav>

      <div class="collapse" id="navbarToggleExternalContent">
        <div class="">
          <hr>
          <a class="dropdown-item menu-item-collapse " href="{{route('user.profile.index')}} ">Profil Saya</a>
          <a class="dropdown-item menu-item-collapse " href="{{route('user.pustaka.index')}} ">Buku Saya</a>
          <a class="dropdown-item menu-item-collapse " href="{{route('logout.post')}}">Keluar</a>
        </div>
      </div>
      <hr>

      <div class="mt-3">
        @if(!request()->routeIs('user.pustaka.create'))
        <a class="dropdown-item menu-item-collapse" href="{{route('user.pustaka.create')}}"> Upload</a>
        @endif
        <a class="dropdown-item menu-item-collapse " href=""> Home</a>
        <a class="dropdown-item menu-item-collapse " href=""> News</a>
        <a class="dropdown-item menu-item-collapse " href=""> Contact</a>
      </div>


      <div class="fixed-bottom" style="padding-bottom: 30px !important;">
        <small style="margin-left: 17px;" class="text-muted">&copy Rumah Pustaka</small>
      </div>


    </div>
  </div>
</div>