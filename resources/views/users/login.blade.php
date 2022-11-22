<!DOCTYPE html>
<html>
<head>
	@include('layout.Login.layoutHead')
</head>
<body>
	@include('sweetalert::alert')
	<section class="vh-100">
	  <div class="container-fluid h-custom">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-md-9 col-lg-6 col-xl-5 d-flex justify-content-center">
	        <img src="image/img-01.png"
	          class="img-fluid" alt="Sample image">
	      </div>
	      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
	        <form  method="POST" action="{{route('login.index')}}">
	        	@csrf
	          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
	          	<img src="image/logo.png" class="" style="height: 50px;">
	            <p class="lead fw-normal mb-0 me-3">Rumah Pustaka</p>
	          </div>

	          <div class="divider d-flex align-items-center my-4">
	            <p class="text-center fw-bold mx-3 mb-0">Masuk</p>
	          </div>

	          <!-- Email input -->
	          <div class="form-outline mb-4">
	            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
	              placeholder="Example@email.com" value="{{old('email')}}">
	            <label class="form-label " for="email">Email address</label>
	            @error("email")
	            <p class="text-danger">{{$message}}</p>
	            @enderror
	          </div>

	          <!-- Password input -->
	          <div class="form-outline mb-3">
	            <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
	              placeholder="Enter password">
	            <label class="form-label" for="password">Password</label>
	            @error("password")
	            <p class="text-danger">{{$message}}</p>
	            @enderror
	          </div>

	          <div class="d-flex justify-content-between align-items-center">
	            <!-- Checkbox -->
	            <div class="form-check mb-0">
	              <input class="form-check-input me-2" type="checkbox" value="1" id="form2Example3" name="rememberme" />
	              <label class="form-check-label" for="form2Example3">
	                Remember me
	              </label>
	            </div>
	            <a href="#!" class="text-body">Forgot password?</a>
	          </div>

	          <div class="text-center text-lg-start mt-4 pt-2">
	            <button class="btn btn-primary btn-lg"
	              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
	            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('register.index')}}"
	                class="link-danger">Register</a></p>
	          </div>

	        </form>
	      </div>
	    </div>
	  </div>
	  <div
	    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
	    <!-- Copyright -->
	    <div class="text-white mb-3 mb-md-0">
	      Copyright © 2020. All rights reserved.
	    </div>
	    <!-- Copyright -->

	    <!-- Right -->
	    <div>
	      <a href="#!" class="text-white me-4">
	        <i class="fab fa-facebook-f"></i>
	      </a>
	      <a href="#!" class="text-white me-4">
	        <i class="fab fa-twitter"></i>
	      </a>
	      <a href="#!" class="text-white me-4">
	        <i class="fab fa-google"></i>
	      </a>
	      <a href="#!" class="text-white">
	        <i class="fab fa-linkedin-in"></i>
	      </a>
	    </div>
	    <!-- Right -->
	  </div>
	</section>



<!-- -====================================- -->

	@include('layout.Login.layoutScript')
</body>
</html>


