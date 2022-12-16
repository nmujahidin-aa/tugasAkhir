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
	        <form  method="POST" action="{{route('verification.send')}}">
	        	@csrf

	        	@if($errors->any() || Session::has('success'))
                    <div @class([
                        'alert',
                        'alert-danger' => $errors->any(),
                        'alert-success' => Session::has('success')
                    ]) role="alert">
                        <strong>{{ $errors->any() ? 'Ooops!' : 'Sukses' }}</strong>
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                        @if (Session::has('success'))
                            <div>{{ Session::get('success') }}</div>
                        @endif
                    </div>
                @endif

                <div class="row">
                   <div class="col-12">
                       <p class="text-center">
                           {{ __('Before proceeding, please check your email for a verification link.') }}
                           {{ __('If you did not receive the email') }},
                       </p>

                       <div class="form-group text-center row m-t-20">
                           <div class="col-12">
                               <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                   {{ __('click here to request another') }}
                               </button>
                           </div>
                       </div>
                   </div>
                </div>
	      </div>
	    </div>
	  </div>
	</section>

	@include('layout.Login.layoutScript')
</body>
</html>


