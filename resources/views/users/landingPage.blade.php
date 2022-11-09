@extends("users.master")

@section("content")

<div class="bg-light hero-landing" style="background-image: url(/image/background.jpg);">
  <div class="container container-vertical">
    <div class="vertical-center">
      <div class="row" style="max-width: 150%;">
        <div class="col-md-8 col-lg-12">
          <div class="hero-txt white-color text-center text-md-start">
            <h1>Melihat Dunia,<br>dalam Satu Kali Tekan.</h1>
            <p>Apa yang kamu cari? Semua ada disini, dan dapatkan secara <b>FREE</b></p>
            </p>
            <br>
            <a href="users/login.blade.php" class="btn btn-success">
              <h5 class="m-2">Get Started <i class="fa fa-arrow-right"></i></h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<hr class="container">

<!-- Features -->

<div class="container d-flex justify-content-center">
  <div class="card shadow-lg category-card" style="padding: 20px; margin-top: -100px;">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-9 text-center text-md-start">
          <h4 class="card-title">Jenis Referensi yang Kamu Butuhkan</h4>
          <p class="card-text">Temukan referensi yang sesuai berdasarkan jenis.</p>
        </div>
        <div class="col-12 col-md-3 text-center text-md-end" style="margin-top: 20px;">
          <a href="{{route('explore')}}" class="btn btn-primary btn-block shadow-lg">Lihat Kategori</a>
        </div>
      </div>
      <div class="row categories mt-5 justify-content-center">
        <div class="col-6 col-md-4 col-lg-2">
          <a href="/kategori/book">
            <div class="c2-box-txt text-center">
              <img class="img-70" src="image/book.png" alt="category-icon">
              <h5 class="h5-sm pt-2">Buku</h5>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="/kategori/journal">
            <div class="c2-box-txt text-center">
              <img class="img-70" src="image/journal.png" alt="category-icon">
              <h5 class="h5-sm pt-2">Jurnal</h5>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="/kategori/karya-tulis-ilmiah">
            <div class="c2-box-txt text-center">
              <img class="img-70" src="image/analysis.png" alt="category-icon">
              <h5 class="h5-sm pt-2">Karya Tulis Ilmiah</h5>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
          <a href="/kategori/article">
            <div class="c2-box-txt text-center">
              <img class="img-70" src="image/article.png" alt="category-icon">
              <h5 class="h5-sm pt-2">Artikel</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Features -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3> Selamat datang di Rumah Pustaka</h3>
          <p class="fst-italic">

            Rumah pustaka adalah sebuah website yang hadir sejak November 2022.
            Platform online kami dirancang untuk membantu pengguna mencari berbagai macam jurnal maupun buku dengan mudah secara online.
            <br>
          </p>

          <p class="fst-italic">
            Website kami menyediakan jurnal dan buku yang inovatif dan menarik, khusus untuk memenuhi kebutuhan anda sebagai Pengguna!
            Yakinlah bahwa ketika Anda membuka Rumah Pustaka, Anda akan menerima informasi yang Anda butuhkan dengan berbagai pilihan baru, unik, dan Menarik.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Students</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
          <p>Events</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Mengapa Harus Rumah Pustaka?</h3>
            <p>
              Rumah Pustaka mempromosikan dan mendukung akses buku akademik dengan menyediakan layanan infrastruktur terbuka bagi Pengguna.
              <br>
              Kami bekerjasama dengan penerbit dan penulis buku untuk akses terbuka yang terkontrol kualitasnya dan menyediakan layanan untuk penerbit, dan
              perpustakaan.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Jurnal</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Artikel</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Buku </h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3><a href="">Bahasa</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3><a href="">Matematika</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3><a href="">Biologi</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3><a href="">Kimia</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3><a href="">Fisika</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3><a href="">Geografi</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3><a href="">Sosiologi</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3><a href="">Management</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3><a href="">Komputer</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3><a href="">Medis</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3><a href="">Fiksi</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3><a href="">Non-Akademik</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Courses</h2>
        <p>Popular Courses</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Web Development</h4>
                <p class="price">$169</p>
              </div>

              <h3><a href="course-details.html">Website Design</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                  <span>Antonio</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-user"></i>&nbsp;50
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;65
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Marketing</h4>
                <p class="price">$250</p>
              </div>

              <h3><a href="course-details.html">Search Engine Optimization</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  <span>Lana</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-user"></i>&nbsp;35
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;42
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="course-item">
            <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Content</h4>
                <p class="price">$180</p>
              </div>

              <h3><a href="course-details.html">Copywriting</a></h3>
              <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                  <span>Brandon</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-user"></i>&nbsp;20
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;85
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

      </div>

    </div>
  </section><!-- End Popular Courses Section -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>William Anderson</h4>
              <span>Content</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Trainers Section -->

</main>

@endsection