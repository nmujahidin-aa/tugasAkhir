@extends('layout.HomePage.master')
@section('title', 'Contact')
@section('content')

<div class="container" style="margin-top: 65px; padding-bottom: 100px; background: #e9ecef; min-height:27rem">
	<div class="row justify-content-center">
		<div class="col-md-12 col-lg-8" style="margin-top:20px">
			<div class="card">
				<h5 style="text-align: center; margin-top: 20px; font-weight: bold;">Hubungi Kami</h5>
				<div class="card-body">
					<div class="mb-3">
						<label for="emailcontact" class="form-label">Alamat Email</label>
						<input type="email" class="form-control" id="emailcontact" placeholder="name@example.com">
					</div>
					<div class="mb-3">
						<label for="namecontact" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" id="namacontact">
					</div>
					<div class="mb-3">
						<label for="namecontact" class="form-label">Subjek</label>
						<input type="text" class="form-control" id="subjekcontact">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
						<textarea class="form-control" id="pesancontact" rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center" style="margin-top: 20px;">
		<div class="col-md-12 col-lg-8">
			<div class="card">
				<h5 style="text-align: center; margin-top: 20px; font-weight: bold;">Our Contact</h5>
				<div class="card-body">
					<p class="card-text" style="text-align: center; margin-top: 20px;">Anda juga dapat menghubungi Kami melalui platform sosial media kami yang tersedia.</p>
					<br>
					<div class="col" style="text-align: center; margin-bottom: 20px;">
						<a style="margin-left: 3px; margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-facebook fs-5"></i></a>
						<a style="margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-instagram fs-5"></i></a>
						<a style="margin-right: 13px;" class="link-dark" target="_blank" href=""><i class="bx bxl-twitter fs-5"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection