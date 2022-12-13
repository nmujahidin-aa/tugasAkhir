@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Create Book</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.books.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div class="my-3">
						<input type="file" name="file" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Title</strong></label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Description</strong></label>
						<input type="text" name="description" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Authors</strong></label>
						<input type="text" name="author" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Tanggal Publikasi</strong> </label>
						<input type="date" name="published_at" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Kategori</strong></label>
						<select class="form-control" name="category_id">
							<option value="">Pilih Kategori</option>
							@foreach($categories as $index => $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="mt-3">
						<a href="{{route('dashboard.books.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection