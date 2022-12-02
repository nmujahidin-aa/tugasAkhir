@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Show User</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.users.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					@if(!empty($result->avatar))
					<div class="text-center">
						<img src="{{asset('storage/'.$result->avatar)}}" style="width:100px;height: 100px;">
					</div>
					@endif
					<div>
						<label>Nama</label>
						<input type="text" value="{{$result->name}}" class="form-control" disabled>
					</div>

					<div>
						<label>Email</label>
						<input type="text" value="{{$result->email}}" class="form-control" disabled>
					</div>

					<div>
						<label>No. Handphone</label>
						<input type="text" value="{{$result->phone}}" class="form-control" disabled>
					</div>
					<div>
						<label>Roles</label>
						<input type="text" value="{{$result->getRoleNames()->implode(', ')}}" class="form-control" disabled>
					</div>
					<div>
						<label>Tanggal Registrasi</label>
						<input type="text" value="{{$result->created_at}}" class="form-control" disabled>
					</div>
					<div class="mt-3">
						<a href="{{route('dashboard.users.index')}} " class="btn btn-warning">Kembali</a>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection