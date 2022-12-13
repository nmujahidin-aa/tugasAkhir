<!DOCTYPE html>
<html>
<head>
	@include('layout.Login.layoutHead')
</head>
<body>
	@include('sweetalert::alert')
	<section class="vh-100" style="background-image: linear-gradient(to bottom right , #f8f9fa , #adb5bd);">
	  <div class="container-fluid h-custom">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-md-9 col-lg-6 col-xl-5 d-flex justify-content-center">
	        <img src="image/img-01.png"
	          class="img-fluid" alt="Sample image">
	      </div>
	      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
	        <form  method="POST" action="{{route('reset-password.post')}}">
	        	@csrf
	         <input type="hidden" name="token" value="{{$token}}">
	          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
	          	<img src="image/logo.png" class="" style="height: 50px;">
	            <p class="lead fw-normal mb-0 me-3">Rumah Pustaka</p>
	          </div>

	          <div class="divider d-flex align-items-center my-4" >
	            <p class="text-center fw-bold mx-3 mb-0">Reset Password</p>
	          </div>

	          <!-- Email input -->
	          <div class="form-floating mb-4">
	            <input type="email" id="flotingEmail" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
	              placeholder="Example@email.com" value="{{old('email',$email)}}" autocomplete="off">
	            <label class="form-label " for="flotingEmail">Email address</label>
	          </div>

	          <div class="form-floating mb-4">
	            <input type="password" id="flotingEmail" name="password" class="form-control form-control-lg" value="" autocomplete="off">
	            <label class="form-label " for="flotingEmail">Password</label>
	          </div>

	          <div class="form-floating mb-4">
	            <input type="password" id="flotingEmail" name="password_confirmation" class="form-control form-control-lg" value="" autocomplete="off">
	            <label class="form-label " for="flotingEmail">Konfirmasi Password</label>
	          </div>

	          <div class="text-center text-lg-start mt-4 pt-2">
	            <button class="btn btn-primary btn-lg"
	              style="padding-left: 2.5rem; padding-right: 2.5rem;">Ubah Password</button>
	          </div>

	        </form>
	      </div>
	    </div>
	  </div>
	</section>

	@include('layout.Login.layoutScript')
</body>
</html>


