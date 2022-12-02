@extends('admin.masteradmin')
@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">
        <strong>User</strong> Terdaftar
    </h1>

    <div class="row mb-2">
        <div class="col-12">
            <a href="{{route('dashboard.users.create')}}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="table-responsive">
                    <table class="table table-hover my-0" id="datatable">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th class="d-none d-xl-table-cell">No. Handphone</th>
                                <th class="d-none d-xl-table-cell">Tanggal Registrasi</th>
                                <th class="d-none d-xl-table-cell">Roles</th>
                                <th class="d-none d-xl-table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->getRoleNames()->implode(", ")}}</td>
                                <td>
                                    <a href="{{route('dashboard.users.show',$row->id)}}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('dashboard.users.edit',$row->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    @if(Auth::user()->id != $row->id)
                                    <a href="#" class="btn btn-danger btn-delete" data-id="{{$row->id}}"><i class="fa fa-trash"></i></a> 
                                    @endif
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
                $("#frmDelete").attr("action", "{{ route('dashboard.users.destroy', 'id') }}".replace("id", id));
                $("#frmDelete").find('input[name="id"]').val(id);
                $("#frmDelete").submit();
            }
        })
    });
</script>
@endsection