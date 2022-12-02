@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Edit Category</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.categories.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div class="my-3">
						<label>Nama Kategori</label>
						<input type="text" value="{{$result->name}}" name="name" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.categories.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection