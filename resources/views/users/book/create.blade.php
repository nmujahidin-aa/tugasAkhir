@extends('layout.HomePage.master')
@section('content')

<div style="margin-top: 65px; background: #e9ecef;">
		
	<div class="row d-flex justify-content-center">
		<div class="col-9">

			<h3  style="margin-top: 60px;">Tambah Buku Anda</h3>
			<div class="card">
				<div class="card-body">
					
					<!-- Isi -->
					<form action="{{route('user.pustaka.store')}}" method="POST" enctype='multipart/form-data'>
						@csrf
						<div class="my-3">
							<label><strong>File</strong> </label>
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
							<label><strong>Date</strong> </label>
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
						<a href="{{route('user.pustaka.index')}} " class="btn btn-warning text-white "><i class="fa fa-chevron-left"></i> Kembali</a>
						<button class="btn btn-primary mx-2"><i class="fa fa-upload"></i> Upload</button>

					</form>
					<!-- Isi End -->


				</div>
			</div>
		</div>
	</div>
</div>
