@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Edit Book</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.books.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div class="my-3">
						<input type="file" name="file" class="form-control">
						<p>Kosongkan jika tidak diubah</p>
					</div>
					<div class="my-3">
						<label><strong>Title</strong></label>
						<input type="text" value="{{$result->title}}" name="title" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Description</strong></label>
						<input type="text" value="{{$result->description}}" name="description" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Authors</strong></label>
						<input type="text" value="{{$result->author}}" name="author" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Tanggal Publikasi</strong> </label>
						<input type="date" value="{{date('Y-m-d',strtotime($result->published_at))}}" name="published_at" class="form-control">
					</div>
					<div class="my-3">
						<label><strong>Kategori</strong></label>
						<select class="form-control" name="category_id">
							<option value="">Pilih Kategori</option>
							@foreach($categories as $index => $row)
							<option value="{{$row->id}}" @if($row->id == $result->category_id) selected @endif>{{$row->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="mt-3">
						<a href="{{route('dashboard.books.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection