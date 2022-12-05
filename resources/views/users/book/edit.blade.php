@extends('layout.HomePage.master')
@section('content')

<div style="margin-top: 65px; background: #e9ecef;">

	<div class="row d-flex justify-content-center">
		<!-- Bagian Kiri Start -->
		<div class="col-8">
			<h3 style="margin-top: 10vh;">Edit Buku</h3>
			<div class="card" style="margin-bottom: 100px;">
				<div class="card-body">
					
					<!-- Isi -->
					<form action="{{route('user.pustaka.update',$result->id)}}" method="POST" enctype='multipart/form-data'>
						@method("PUT")
						@csrf
						<div class="my-3">
							<label><strong>File</strong></label>
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
						<div class="my-3">
							<label><strong>Kategori</strong></label>
							<select class="form-control" name="category_id">
								<option value="">Pilih Kategori</option>
								@foreach($categories as $index => $row)
								<option value="{{$row->id}}" @if($row->id == $result->category_id) selected @endif>{{$row->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="d-flex justify-content-end">
							<a href="{{route('user.pustaka.index')}} " class="btn btn-warning text-white mx-2"><i class="fa fa-chevron-left"></i> Kembali</a>
							<button class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button>
						</div>

					</form>

				</div>
			</div>

		</div>
		<!-- Bagian Kiri End -->

	</div>

</div>
@endsection