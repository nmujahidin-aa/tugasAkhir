@extends('layout.landingPage.master')
@section('content')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Melihat Dunia, dalam Satu Kali Tekan</h1>
        <h2>Apa yang kamu cari? Semua ada disini, dan dapatkan secara <b>FREE</b></h2>
        <div>
          <a href="/register" class="btn-get-started scrollto text-decoration-none"><b>Daftar</b></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="image/hero-img.svg" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>
<!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
        <img src="image/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
      </div>
      <div class="col-lg-6 pt-5 pt-lg-0">
        <h3 data-aos="fade-up">Temukan Referensimu</h3>
        <p data-aos="fade-up" data-aos-delay="100">
          Akses jutaan halaman publikasi dan tetap up to date dengan apa yang terjadi di bidang Anda. 
        </p>

        <div class="row">
          <div data-aos="fade-up" data-aos-delay="100">
            
          	<div class="your-class">

          	  <div class="text-center">
          	  	<i class="bx bx-cog"></i>
          	  	<p>Teknik</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-dna"></i>
          	  	<p>Biologi</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-shield-plus"></i>
          	  	<p>Kesehatan</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-history"></i>
          	  	<p>Sejarah</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-code"></i>
          	  	<p>Informatika</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-conversation"></i>
          	  	<p>Bahasa</p>
          	  </div>

          	  <div class="text-center">
          	  	<i class="bx bx-chart"></i>
          	  	<p>Ekonomi</p>
          	  </div>
          	  
          	</div>

          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <p>Gabung bersama jutaan akademisi dan peneliti</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><img src="image/lab.png"></div>
          <p class="title">Percepat Penelitianmu</h4>
          <p class="description">Dapatkan akses ke jutaan makalah penelitian dan tetap up to date dengan topik-topik yang relevan dengan tulisanmu</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><img src="image/audience.png"> </div>
          <h4 class="title">Kembangkan Audiensmu</h4>
          <p class="description">Bagikan tulisanmu dengan akademisi lain, kembangkan audiensmu, dan trek pengaruhmu di bidang mu</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Testimonial Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Testimoni</h2>
      <p>Pendapat dari pengguna kami</p>
    </div>

    <div class="tim">
      @foreach($table as $index => $row)
      <div class="my-3 mx-1 " data-aos="zoom-in" data-aos-delay="100">
        <div class="member rounded">
          <img src="{{asset('storage/'.$row->foto)}}" class="img-fluid" alt="" style="height: 50vh; width: 70vh;">
          <div class="member-info">
            <div class="member-info-content">
              <h4>{{$row->name}}</h4>
              <span>{{$row->description}}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>

<!-- End Team Section -->

<div class="container-fluid py-5">
	<div class="card">
		<div class="card-body bg-success shadow">
			
			<h3 class="text-center container text-white py-5"><strong>"Tingkatkan penelitian Anda dan bergabunglah dengan komunitas yang terdiri dari jutaan ilmuwan"</h3>
			<a href="/login">
				<div class="text-center">
					<div class="btn text-success px-5" style="background: #fff;"><strong>Masuk</strong></div>
				</div>
			</a>
		</div>
	</div>
</div>

</main>

@endsection