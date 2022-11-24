@extends('layout.HomePage.master')
@section('content')

<div style="margin-top: 65px; background: #e9ecef;">

	<div class="row">
		<!-- Bagian Kiri Start -->
		<div class="col-9">
			
			<div class="row d-flex justify-content-end mt-5">
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							
							<!-- Isi -->
							<div class="">Publication Type</div>
							<form action="{{route('pustaka.update',$result->id)}}" method="POST" enctype='multipart/form-data'>
								@method("PUT")
								@csrf
								<div class="my-3">
									<input type="file" name="file" class="form-control" style="background-color: #e9ecef;">
									<p>Kosongkan jika tidak diubah</p>
								</div>
								<div class="my-3">
									<label><strong>Title</strong></label>
									<input type="text" value="{{$result->title}}" name="title" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Description</strong></label>
									<input type="text" value="{{$result->description}}" name="description" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Authors</strong></label>
									<input type="text" value="{{$result->author}}" name="author" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Date</strong> </label>
									<input type="date" value="{{$result->published_at}}" name="published_at" class="form-control">
								</div>

								<div class="d-flex justify-content-end">
									<button class="btn btn-primary"><i class="bx bx-upload mx-2"></i>Upload</button>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Bagian Kiri End -->


		<!-- Bagian Kanan Start -->
		<div class="col-3">
			
			<div class="row d-flex justify-content-start mt-5">
				<div class="col-8">
					<div class="card">
						<div class="card-body">
							
							<!-- Isi -->
							ini buat info

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Bagian Kanan End -->
	</div>

</div>
@endsection