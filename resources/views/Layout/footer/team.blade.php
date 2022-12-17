@extends('layout.HomePage.master')
@section('title', 'Team')
@section('content')


<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <br>
      <h2 class="text-center">Meet The Team</h2>
    </div>

    <div class="tim">
      <div class="my-3 mx-1 " data-aos="zoom-in" data-aos-delay="100">
        <div class="member rounded">
          <img src="{{URL::to('/')}}/image/team/idin.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Nur Mujahidin</h4>
              <span>Developer 1</span>
            </div>
          </div>
        </div>
      </div>

      <div class="my-3 mx-1 " data-aos="zoom-in" data-aos-delay="100">
        <div class="member rounded">
          <img src="{{URL::to('/')}}/image/team/wafa.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Wafa Amalia Putri</h4>
              <span>Developer 1</span>
            </div>
          </div>
        </div>
      </div>

      <div class="my-3 mx-1 " data-aos="zoom-in" data-aos-delay="100">
        <div class="member rounded">
          <img src="{{URL::to('/')}}/image/team/safira.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Wafa Amalia Putri</h4>
              <span>Developer 1</span>
            </div>
          </div>
        </div>
      </div>

      <div class="my-3 mx-1 " data-aos="zoom-in" data-aos-delay="100">
        <div class="member rounded">
          <img src="{{URL::to('/')}}/image/team/safira.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Wafa Amalia Putri</h4>
              <span>Developer 1</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

@endsection