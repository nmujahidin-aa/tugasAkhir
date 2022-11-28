<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow-sm" id="navbar_top">
  <div class="container-lg">
    <div class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile" aria-controls="menu-mobile" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;">
      <i class="bx bx-menu"></i>
    </div>
    <a class="navbar-brand logo-light" href="">
      <img src="image/logo.png" alt="Rumah Pustaka" height="40px">
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
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Contact</a>
        </li>
      </ul>
      <div class=" ms-auto mx-2">
        <form class="d-flex">
          <input class="form-control me-2" type="search" id="search_val" placeholder="Search" aria-label="Search">
          <button class="bx bx-search" id="btn_search" type="submit" style="border-color: transparent"></button>
        </form>
      </div>

      <div class="mx-2 dropdown">
        <a class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color: transparent;">
          <img src="image/team/team-1.jpg" class="rounded-circle" style="height: 7vh;">
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Profil Saya</a></li>
          <li><a class="dropdown-item" href="#">Buku Saya</a></li>
          <li><a class="dropdown-item" href="#">Pengaturan</a></li>
          <hr>
          <li><a class="dropdown-item" href="{{route('logout.post')}} ">Keluar</a></li>
        </ul>
      </div>
      
      <ul id="navbar-menu" class="navbar-nav my-2 me-5 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a href="{{route('create.index')}} " class="btn btn-primary rounded-3"> Upload </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="offcanvas offcanvas-top dark-bg" tabindex="-1" id="offcanvasSearch" aria-labelledby="offcanvasTopLabel">
  <!-- Offcanvas Header Start -->
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel" style="margin-left: 12px;">Cari</h5>
  </div>
  <!-- Offacnvas Header End -->

  <!-- Offcanvas Body Start-->
  <div class="offcanvas-body">
    <div class="container">
      <div class="row height d-flex">
        <div class="col-md-12">
          <form class="d-flex">
            <input class="form-control me-2" type="search" id="search_val" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" id="btn_search" type="submit">Search</button>
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
      <img src="/image/logo.png" height="30" alt="Rupus">
    </h5>
    <button style="margin-top: 4px;" type="button" class="btn navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close">
    </button>
  </div>
  <div class="offcanvas-body">
    <div class="mt-2 pt-2">
      <div class="card shadow-sm" style="padding: 8px; padding-bottom: 12px;">
        <div class="d-flex container">
          <div class="flex-fill my-auto">
            <small class="text-muted">Cari Referensi?</small>
          </div>
          <div class="my-auto pt-1">
            <a href="/login" class="btn btn-success">Get Started</a>
          </div>
        </div>
      </div>
      <a class="dropdown-item menu-item-collapse " href=""><span>Home</span></a>
      <a class="dropdown-item menu-item-collapse " href=""><span>News</span></a>
      <a class="dropdown-item menu-item-collapse " href=""><span>Contact</span></a>
      <div class="fixed-bottom" style="padding-bottom: 30px !important;">
        <small style="margin-left: 17px;" class="text-muted">&copy Rumah Pustaka</small>
      </div>
    </div>
  </div>
</div>