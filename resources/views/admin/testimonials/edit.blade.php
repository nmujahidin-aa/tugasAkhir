@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Edit Testimoni</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.testimonials.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div>
						<label>Foto</label>
						<input type="file" value="{{$result->foto}}" name="foto" class="form-control" accept="image/*">
						<p>Kosongkan jika tidak perlu</p>
					</div>
					<div>
						<label>Nama</label>
						<input type="text" value="{{$result->name}}" name="name" class="form-control">
					</div>

					<div>
						<label>Description</label>
						<input type="text" value="{{$result->description}}" name="description" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.testimonials.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection