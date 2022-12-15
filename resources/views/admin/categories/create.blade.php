@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Create Category</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.categories.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div class="my-3">
						<label>Nama Kategori</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="my-3">
						<label>Icon</label>
						<input type="text" name="icon" class="form-control">
					</div>
					

					<div class="mt-3">
						<a href="{{route('dashboard.categories.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection