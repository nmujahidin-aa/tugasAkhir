@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Show Book</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.books.update',$result->id)}}" method="post" enctype='multipart/form-data'">
				@csrf
				@method("PUT")
					<div class="my-3">
						<label><strong>Kategori</strong></label>
						<input type="text" value="{{$result->category->name ?? null}}" class="form-control" disabled>
					</div>
					<div class="my-3">
						<label><strong>File</strong></label>
						<p><a href="{{asset('storage/'.$result->file)}}" class="btn btn-success btn-sm">Lihat File</a></p>
					</div>
					<div class="my-3">
						<label><strong>Title</strong></label>
						<input type="text" value="{{$result->title}}" class="form-control" disabled>
					</div>
					<div class="my-3">
						<label><strong>Description</strong></label>
						<input type="text" value="{{$result->description}}" class="form-control" disabled>
					</div>
					<div class="my-3">
						<label><strong>Authors</strong></label>
						<input type="text" value="{{$result->author}}" class="form-control" disabled>
					</div>
					<div class="my-3">
						<label><strong>Tanggal Publikasi</strong> </label>
						<input type="date" value="{{date('Y-m-d',strtotime($result->published_at))}}" class="form-control" disabled>
					</div>
					<div class="my-3">
						<label><strong>Dibuat Oleh</strong></label>
						<input type="text" value="{{$result->user->name ?? null}}" class="form-control" disabled>
					</div>
					<div class="mt-3">
						<a href="{{route('dashboard.books.index')}} " class="btn btn-warning">Kembali</a>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection