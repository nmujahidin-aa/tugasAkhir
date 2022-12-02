@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Edit User</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.users.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div>
						<label>Nama</label>
						<input type="text" value="{{$result->name}}" name="name" class="form-control">
					</div>

					<div>
						<label>Email</label>
						<input type="text" value="{{$result->email}}" name="email" class="form-control">
					</div>

					<div>
						<label>No. Handphone</label>
						<input type="text" value="{{$result->phone}}" name="phone" class="form-control">
					</div>

					<div>
						<label>Password</label>
						<input type="text" name="password" class="form-control">
						<p>Kosongkan jika tidak diubah</p>
					</div>

					<div>
						<label>Pilih Role</label>
						<select class="form-control" name="roles">
							<option value="">Pilih Role</option>
							<option value="Administrator" @if(in_array('Administrator',$result->roles->pluck('name')->toArray())) selected @endif>Administrator</option>
							<option value="User" @if(in_array('User',$result->roles->pluck('name')->toArray())) selected @endif>User</option>
						</select>
					</div>
					<div>
						<label>Avatar</label>
						<input type="file" name="avatar" class="form-control" accept="image/*">
						<p>Kosongkan jika tidak diubah</p>
					</div>
					<div class="mt-3">
						<a href="{{route('dashboard.users.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection