@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Show Testimoni</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.testimonials.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div class="text-center">
						<img src="{{asset('storage/'.$result->foto)}}" class="rounded-circle" style="width:150px;height: 150px;">
					</div>
					<div>
						<label>Nama</label>
						<input type="text" value="{{$result->name}}" class="form-control" disabled>
					</div>

					<div>
						<label>Description</label>
						<input type="text" value="{{$result->description}}" class="form-control" disabled>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.testimonials.index')}} " class="btn btn-warning">Kembali</a>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection