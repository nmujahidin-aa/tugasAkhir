@extends('layout.HomePage.master')
@section('title', 'Contact')
@section('content')

<div class="container" style="padding-top: 35px; padding-bottom: 100px; background: #e9ecef; min-height:27rem">
	<div class="card shadow">
		<div class="card-body">
			<div class="row" style="margin-top: 20px;">
				<div class="col-sm-12 col-md-3 col-lg-4 px-5">
					<h3>Hubungi Kami</h3>
					<p class="card-text" style="text-align:justify;">
						Anda juga dapat menghubungi Kami melalui platform sosial media kami yang tersedia.
					</p>
					<br>
					<div>
						<div>
							<a href="" class="text-decoration-none text-dark">
								<i class="fs-3 fa fa-instagram my-2"></i>
								<span style="vertical-align: super;"> rumah_pustaka</span> 
							</a>
						</div>
						<div>
							<a href="" class="text-decoration-none text-dark">
								<i class="fs-3 fa fa-facebook-square my-2"></i> 
								<span style="vertical-align: super;"> rumah pustaka</span>
							</a>
						</div>
						<div>
							<a href="" class="text-decoration-none text-dark">
								<i class="fs-3 fa fa-twitter-square my-2"></i> 
								<span style="vertical-align: super;"> rumah_pustaka</span> 
							</a>
						</div>
						<div>
							<a href="" class="text-decoration-none text-dark">
								<i class="fs-3 fa fa-envelope-square my-2"></i>
								<span style="vertical-align: super;"> rumahpustaka@gmail.com</span> 
							</a>
						</div>
						<div>
							<a href="" class="text-decoration-none text-dark">
								<i class="fs-3 fa fa-phone-square my-2"></i>
								<span style="vertical-align: super;"> +62 83-835-949-684</span> 
							</a>
						</div>
						
					</div>
				</div>

				<div class="col-sm-12 col-md-9 col-lg-8 justify-content-end">
					<h3>Saran dan Kritik</h3>
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error}}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if($message = Session::get('succes'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>{{$message}} </strong>
						</div>
					@endif
					<form method="POST" action="{{route('contact.send')}} ">
						@csrf
						<div class="mb-3">
							<label for="emailcontact" class="form-label">Alamat Email</label>
							<input type="email" name="email" class="form-control" id="emailcontact" placeholder="name@example.com">
						</div>
						<div class="mb-3">
							<label for="namecontact" class="form-label">Nama Lengkap</label>
							<input type="text" name="nama" class="form-control" id="namacontact">
						</div>
						<div class="mb-3">
							<label for="namecontact" class="form-label">Subjek</label>
							<input type="text" name="subjek" class="form-control" id="subjekcontact">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
							<textarea class="form-control" name="massage" id="pesancontact" rows="5"></textarea>
						</div>
						<div>
							<button class="btn btn-primary px-4">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>

@endsection