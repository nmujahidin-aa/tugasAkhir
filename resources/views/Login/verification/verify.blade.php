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
	        <img src="{{URL::to('/')}}/image/img-01.png"
	          class="img-fluid" alt="Sample image">
	      </div>
	      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <h4 class="text-muted text-center font-18"><b>{{ __('Verify Your Email Address') }}</b></h4>
	        <form  method="POST">
	        	<div class="row">
                    <div class="col-12 mt-3">
                        @if($errors->any() || !empty($success))
                            <div @class([
                                'alert',
                                'alert-danger' => $errors->any(),
                                'alert-success' => !empty($success)
                            ]) role="alert">
                                <strong>{{ $errors->any() ? 'Ooops!' : 'Sukses' }}</strong>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                                @if (!empty($success))
                                    <div>{{ $success }}</div>
                                @endif
                            </div>
                        @endif
                        <p>
                            <a href="{{route('login.index')}}" class="btn btn-primary btn-block waves-effect waves-light" style="width: 100%;">
                                Kembali ke halaman login
                            </a>
                        </p>
                    </div>
                </div>
	      </div>
	    </div>
	  </div>
	</section>

	@include('layout.Login.layoutScript')
</body>
</html>


