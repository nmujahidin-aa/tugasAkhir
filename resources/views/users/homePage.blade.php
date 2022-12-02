@extends('layout.HomePage.master')
@section('title', 'Homepage')
@section('content')

<div style="margin-top: 65px;">

	<div class="row">
		<!-- Bagian Kiri Start -->
		<div class="col-lg-7 col-md-12">
			
			<div class="row d-flex justify-content-end mt-5">
				<div class="col-lg-9 col-md-12">
					<div class="card">
						<div class="card-body">
							
							<!-- Isi -->
							<div class="row">
								<div class="col-1">
									<img src="image/team/team-1.jpg" class="rounded-circle" style="height: 7vh;">
								</div>
								<div class="col-11">
									<p class="text-start mx-2">Nur Mujahidin Achmad Akbar</p>
								</div>

								<div class="card-body">
                        			<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
			                        <p class="card-text">
			                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
			                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
			                        </p>
                    		</div>
	                    <div class="card-footer">
	                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
	                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
	                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
		                </div>
                	</div>
				</div>
			</div>
		</div>
		<!-- Bagian Kiri End -->
	</div>
</div>
@endsection