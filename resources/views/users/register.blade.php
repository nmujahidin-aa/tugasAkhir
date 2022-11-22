<!DOCTYPE html>
<html>
<head>
	@include('layout.Login.layoutHead')
</head>
<body style="background: #ebefee">
  @include('sweetalert::alert')
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="{{route('register.index')}} " autocomplete="off">
            @csrf
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold fs-5 mx-3 mb-0">Daftar</p>
            </div>

            <!-- Name input -->
            <div class="form-outline mb-1">
              <label class="form-label" for="nama">Nama Lengkap</label>
              <input type="text" id="nama" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
                placeholder="Masukkan nama kamu" />
            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                placeholder="Masukkan email" />
            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="phone">No. Handphone</label>
              <input type="number" id="phone" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror"
                placeholder="Masukkan No. Handphone" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-1">
              <label class="form-label" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                placeholder="Buat Password" />
            </div>

            <div class="form-outline mb-1">
              <label class="form-label" for="password">Ulangi Password</label>
              <input type="password" id="password" name="password_confirmation" class="form-control form-control-lg @error('password') is-invalid @enderror"
                placeholder="Buat Password" />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">have an account? 
              <a href="{{route('login.index')}}" class="link-primary">Login</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

	@include('layout.Login.layoutScript')
</body>
</html>
