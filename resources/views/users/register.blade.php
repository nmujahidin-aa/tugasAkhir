<!DOCTYPE html>
<html>
<head>
	@include('layout.layoutHead')
</head>
<body style="background: #ebefee">

		<section class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="card">
						<div class="card-body shadow-lg bg-body rounded">
							<form method="POST" action="/login">
								@csrf
								<div class="text-center">
				                    <img src="image/logo.png" height="50"  alt="RumahPustaka">
				                </div>
				                <hr>
								<p class="text-center h4   mx-1 mx-md-4 mt-4">Daftar</p>
                  				<p class="text-center "style="font-weight: 350; font-size:15px;"> sudah punya akun? 
                  					<a href="/login" style="font-weight: 350; font-size:15px; text-decoration:none">Masuk</a>
                  				</p>

	                  			<div class="form-floating mb-2">
			                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="name@example.com" autofocus="">
			                        <label for="email">Nama</label>
									@error("nama")
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
								<div class="form-floating mb-2">
			                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus="">
			                        <label for="email">Email</label>
									@error("email")
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
								<div class="form-floating mb-2">
				                    <input type="Password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password" autofocus="">
				                    <label for="email">Kata Sandi</label>
									@error("password")
									<p class="text-danger">{{$message}}</p>
									@enderror
								</div>
								<div class="d-grid gap-2 mb-1">
				                  <button class="btn btn-primary">Daftar</button>
				                </div>	
				                <div class=" d-flex justify-content-center mb-4 ">
				                  <label class="form-check-label" for="form2Example3">
				                    <a href="forgot" style="font-weight: 450; font-size:15px; text-decoration:none">Lupa kata sandi ?</a> 
				                  </label>
				                </div>					
				            </form>
						</div>
					</div> 
					<div class="justify-content-start mx-2">
				    	<a href="" class="text-decoration-none text-secondary" style="font-size: 10px;">&copy Rumah_Pustaka</a>
				    	<a href="" class="text-decoration-none text-secondary" style="font-size: 10px;">Terms</a>
				    </div>
				</div>
			</div>
		</section>

	@include('layout.layoutScript')
</body>
</html>
