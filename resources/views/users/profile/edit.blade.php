@extends('layout.HomePage.master')
@section('content')

<div class="container">
	
	<h1 class="text-center" style="padding-top: 20px;">Edit Profil</h1>
	<div class="card">
		<div class="card-body">
			<form method="POST" action="{{route('user.profile.update')}} " autocomplete="off" enctype='multipart/form-data'>
			  @csrf
			  @method("PUT")
			  <!-- Name input -->
			  <div class="form-outline mb-1">
			    <label class="form-label" for="avatar">Avatar</label>
			    <input type="file" id="nama" name="avatar" class="form-control form-control-lg @error('name') is-invalid @enderror"
			      placeholder="Avatar" />
			      <p>Kosongkan jika tidak diubah</p>
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="nama">Nama Lengkap</label>
			    <input type="text" id="nama" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
			      placeholder="Masukkan nama kamu" value="{{$result->name}}"/>
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="email">Email</label>
			    <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
			      placeholder="Masukkan email" value="{{$result->email}}"/>
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="phone">No. Handphone</label>
			    <input type="number" id="phone" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror"
			      placeholder="Masukkan No. Handphone" value="{{$result->phone}}" />
			  </div>

			  <!-- Password input -->
			  <div class="form-outline mb-1">
			    <label class="form-label" for="password">Password Baru</label>
			    <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
			      placeholder="Buat Password" />
			      <p>Kosongkan jika tidak diubah</p>
			  </div>

			  <div class="form-outline mb-1">
			    <label class="form-label" for="password">Ulangi Password Baru</label>
			    <input type="password" id="password" name="password_confirmation" class="form-control form-control-lg @error('password') is-invalid @enderror"
			      placeholder="Buat Password" />
			      <p>Kosongkan jika tidak diubah</p>
			  </div>

			  <div>
			  	<a href="{{route('homepage.index')}} " class="btn btn-warning text-white"><i class="fa fa-chevron-left"></i> Kembali</a>
			  	<button class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button>
			  </div>
			</form>
		</div>
	</div>

</div>

@endsection