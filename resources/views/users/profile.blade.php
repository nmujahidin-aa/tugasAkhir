@extends('layout.HomePage.master')
@section('content')

<div class="container">
	
	<form method="POST" action="{{route('user.profile_update')}} " autocomplete="off" enctype='multipart/form-data'>
	  @csrf
	  <div class="my-5">
	    <p class="text-center">Profil Saya</p>
	  </div>

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
	  	<button class="btn btn-primary">Update</button>
	  </div>
	</form>

</div>

@endsection