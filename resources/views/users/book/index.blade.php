@extends('layout.HomePage.master')
@section('content')

<div class="container" style="background: #e9ecef;">
	<div class="row mt-5">
		<div class="card rounded-3" style="margin-top: 50px; margin-bottom: 20vh;">
			<div class="card-body" >
				<div class="col-12">
					<h3>Buku Saya <i class="fa fa-bookmark-o"></i></h3>
					<a href="{{route ('user.pustaka.create')}} " class="btn btn-primary my-3"><i class="fa fa-plus-circle"></i> Create</a>
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
									<td>{{$row->author}}</td>
									<td>{{date('d-m-Y',strtotime($row->published_at))}}</td>
									<td>
										<a href="{{route('user.pustaka.edit',$row->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-sm btn-danger btn-delete" data-id="{{$row->id}}"><i class="fa fa-trash"></i> </a>
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
					<a href="{{route('homepage.index')}} " class="btn btn-warning text-white"><i class="fa fa-chevron-left"></i> Kembali</a>
				</div>
			</div>
		</div>
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
            $("#frmDelete").attr("action", "{{ route('user.pustaka.destroy', 'id') }}".replace("id", id));
            $("#frmDelete").find('input[name="id"]').val(id);
            $("#frmDelete").submit();
        }
    })
  })
</script>
@endsection