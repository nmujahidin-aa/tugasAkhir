@extends('admin.masteradmin')
@section('content')

<div class="container-fluid p-0">
    <h1 class="h3 mb-3">
        <strong>Buku </strong> Terupload
    </h1>

    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('dashboard.books.create')}}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="table-responsive">
                    <table class="table table-hover my-0" id="datatable">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">Kategori</th>
                            	<th class="d-none d-xl-table-cell">Buku</th>
                                <th class="d-none d-xl-table-cell">Judul Buku</th>
                                <th class="d-none d-xl-table-cell">Author</th>
                                <th class="d-none d-xl-table-cell">Deskripsi</th>
                                <th class="d-none d-xl-table-cell">Slug</th>
                                <th class="d-none d-xl-table-cell">Tanggal Publikasi</th>
                                <th class="d-none d-xl-table-cell">Dibuat Oleh</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table as $index => $row)                            
                            <tr>
                                <td>{{$row->category->name ?? ""}}</td>
                                <td>
                                	<a href="{{asset('storage/'.$row->file)}}" class="btn btn-success btn-sm">Lihat File</a>
                                </td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->author}}</td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->slug}}</td>
                                <td>{{date('d-m-Y',strtotime($row->published_at))}}</td>
                                <td>{{$row->user->name ?? null}}</td>
                                <td>
                                    <a href="{{route('dashboard.books.show',$row->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('dashboard.books.edit',$row->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-delete" data-id="{{$row->id}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script type="text/javascript">
    $(function(){
        $("#datatable").DataTable();
        
        $(document).on("click",".btn-delete",function(){
            let id = $(this).data("id");
            if(confirm("Apakah anda yakin ingin menghapus data ini ?")){
                $("#frmDelete").attr("action", "{{ route('dashboard.books.destroy', 'id') }}".replace("id", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    });
</script>
@endsection