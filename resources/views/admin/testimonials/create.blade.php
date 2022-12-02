@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Create Testimoni</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.testimonials.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div>
						<label>Foto</label>
						<input type="file" name="foto" class="form-control" accept="image/*">
					</div>
					<div>
						<label>Nama</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div>
						<label>Description</label>
						<textarea class="form-control" name="description"></textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.testimonials.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection