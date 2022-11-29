@extends('layout.HomePage.master')
@section('content')

<div class="container" style="margin-top: 65px; background: #e9ecef;">
	<div class="row mt-5" style="margin-top: 100px;">
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