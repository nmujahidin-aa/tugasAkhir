@extends('layout.HomePage.master')
@section('title', 'Homepage')
@section('content')

<div class="container">
	<div style="margin-top: 65px;">
		<div class="row">
			<div class="col-8">
				<div class="card" style="margin-top: 10px; margin-bottom: 200px;">
					<div class="card-body">
						
						<div class="row">
							<div class="col-2">
								<img src="images/logo.png">
							</div>
							<div class="col-10">
								<p>Nur Mujahidin AA</p>
								<a href="" style="margin-top: -30px;">email@email.com</a>
							</div>
						</div>
						<div><strong>Title</strong></div>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodot nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div>
							<a href="" class="me-3"><i class="fa fa-eye"></i></a>
							<a href="" class="mx-3"><i class="fa fa-share"></i></a>
							<a href="" class="mx-3"><i class="fa fa-download"></i></a>
							<p class="text-muted text-right">category</p>
						</div>

					</div>
				</div>
			</div>


			<div class="col-4">
				<div class="card" style="margin-top: 10px;">
					<div class="card-body"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection