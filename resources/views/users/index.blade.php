@extends('layout.HomePage.master')
@section('content')

<div style="margin-top: 65px; background: #e9ecef;">

	<div class="row">
		<!-- Bagian Kiri Start -->
		<div class="col-9">
			
			<div class="row d-flex justify-content-end mt-5">
				<div class="col-9">
					<div class="card">
						<div class="card-body">
							
							<!-- Isi -->
							<div class="">Publication Type</div>
							<form action="{{route('pustaka.store')}}" method="POST" enctype='multipart/form-data'>
								@csrf
								<div class="my-3">
									<input type="file" name="file" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Title</strong></label>
									<input type="text" name="title" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Description</strong></label>
									<input type="text" name="description" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Authors</strong></label>
									<input type="text" name="author" class="form-control" style="background-color: #e9ecef;">
								</div>
								<div class="my-3">
									<label><strong>Date</strong> </label>
									<input type="date" name="published_at" class="form-control">
								</div>

								<div class="d-flex justify-content-end">
									<button class="btn btn-primary"><i class="bx bx-upload mx-2"></i>Upload</button>
								</div>

							</form>
							<!-- Isi End -->

							<div class="row mt-5">
								<div class="col-12">
									<h3>Pustaka Saya</h3>
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
											<thead>
												<th>No</th>
												<th>File</th>
												<th>Judul</th>
												<th>Author</th>
												<th>Published At</th>
												<th>Aksi</th>
											</thead>
											<tbody>
												@forelse($table as $index => $row)
												<tr>
													<td>{{$table->firstItem() + $index}}</td>
													<td>
														<a href="{{asset('storage/'.$row->file)}}" class="btn btn-success btn-sm">Lihat File</a>
													</td>
													<td>{{$row->title}}</td>
													<td>{{$row->user->name ?? null}}</td>
													<td>{{date('d-m-Y',strtotime($row->published_at))}}</td>
													<td>
														<a href="{{route('pustaka.edit',$row->id)}}" class="btn btn-primary">Edit</a>
														<a href="#" class="btn btn-danger btn-delete" data-id="{{$row->id}}">Hapus</a>
													</td>
												</tr>
												@empty
												<tr class="text-center">
													<td colspan="10">Data tidak ditemukan</td>
												</tr>
												@endforelse
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Bagian Kiri End -->


		<!-- Bagian Kanan Start -->
		<div class="col-3">
			
			<div class="row d-flex justify-content-start mt-5">
				<div class="col-8">
					<div class="card">
						<div class="card-body">
							
							<!-- Isi -->
							ini buat info

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Bagian Kanan End -->
	</div>

</div>

<form id="frmDelete" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id"/>
</form>

@endsection

@section("script")
<script>
  $(function(){
    $(document).on("click",".btn-delete",function(){
        let id = $(this).data("id");
        if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
            $("#frmDelete").attr("action", "{{ route('pustaka.destroy', 'id') }}".replace("id", id));
            $("#frmDelete").find('input[name="id"]').val(id);
            $("#frmDelete").submit();
        }
    })
  })
</script>
@endsection