@extends('layout.HomePage.master')
@section('content')

<div class="container" style="padding-bottom: 40px;">
	
	  <div style="padding-top: 30px;">
	    <h1 class="text-center">Profile Saya</h1>
	  </div>

	  <!-- Name input -->

	  <div class="text-center">
	  	<img src="@if(!empty(Auth::user()->avatar)) {{asset('storage/'.Auth::user()->avatar)}} @else https://avatars.dicebear.com/api/initials/{{ Auth::user()->name  ?? null}}.svg?margin=10 @endif" class="rounded-circle" style="height: 150px; width: 150px;">
	  </div>

	  <div class="card" style="margin-top: 20px;">
	  	<div class="card-body">
	  		<div class="form-outline my-3">
	  		  <label class="form-label" for="nama">Nama Lengkap</label>
	  		  <input type="text" id="nama" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
	  		    placeholder="Masukkan nama kamu" value="{{$result->name}}"/ disabled>
	  		</div>

	  		<div class="form-outline mb-1">
	  		  <label class="form-label" for="email">Email</label>
	  		  <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
	  		    placeholder="Masukkan email" value="{{$result->email}}"/ disabled>
	  		</div>

	  		<div class="form-outline mb-1">
	  		  <label class="form-label" for="phone">No. Handphone</label>
	  		  <input type="number" id="phone" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror"
	  		    placeholder="Masukkan No. Handphone" value="{{$result->phone}}" / disabled>
	  		</div>

	  		<!-- Password input -->
	  		<div class="form-outline mb-1">
	  		  <label class="form-label" for="password">Password</label>
	  		  <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
	  		    placeholder="********" / disabled>
	  		</div>
	  		<div class="my-3">
	  			<a href="{{route('homepage.index')}} " class="btn btn-warning text-white"><i class="fa fa-chevron-left"></i> Kembali</a>
	  			<a href="{{route('user.profile.edit')}} " class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
	  		</div>
	  	</div>
	  </div>

</div>

@endsection