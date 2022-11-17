<!DOCTYPE html>
<html>
<head>
	@include('layout.layoutHead')
</head>
<body>

	<section class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-body">
						<form method="POST" action="/login">
							@csrf
							<h3 class="text-center"><strong>Register</strong> </h3>
							<div class="form-group mb-2">
								<label>Nama</label>
								<input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
								@error("nama")
								<p class="text-danger">{{$message}}</p>
								@enderror
							</div>

							<div class="form-group mb-2">
								<label>Nama</label>
								<input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
								@error("nama")
								<p class="text-danger">{{$message}}</p>
								@enderror
							</div>
							
							<div class="form-group mb-2">
								<label>Password</label>
								<input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
								@error("password")
								<p class="text-danger">{{$message}}</p>
								@enderror
							</div>
							<button class="btn btn-primary text-center mt-3">LOGIN</button>
						</form>
						
					</div>
				</div>

			</div>
		</div>
	</section>

	@include('layout.layoutScript')
</body>
</html>