@extends('layout.HomePage.master')
@section('title', 'Homepage')
@section('content')

<div class="container">
	<div style="margin-top: 65px;">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="card" style="margin-top: 10px; margin-bottom: 200px;">
					<div class="card-body">
						
						<div>
							<strong>Title Buku</strong>
						</div>

						<div class="mt-2">
							<span class="text-center " style="padding-bottom: 3px; padding-left: 10px; padding-right: 10px; max-width: 15%; background-color: #C5E8E5; font-size: 13px;">category buku</span>
							<span class="text-muted" style="font-size: 13px;"><i class="bx bx-history"></i> 10 menit lalu</span>
						</div>

						<div class="mt-4">
							<p style="font-weight: bold;">Username</p>
							<span>Description:</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="mt-2">
							<div class="btn btn-sm btn-outline-success rounded-pill">Donwload</div>
						</div>

					</div>
				</div>
			</div>


			<div class="col-lg-4 col-md-12">
				<div class="card" style="margin-top: 10px;">
					<div class="card-body"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection