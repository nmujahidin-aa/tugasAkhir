@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Show FAQ</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.faqs.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div class="my-3">
						<input type="text" value="{{$result->question}}" name="question" class="form-control" disabled>
					</div>
					<div>
						<label>Answer</label>
						<textarea class="form-control" name="answer" disabled>{{$result->answer}}</textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.faqs.index')}} " class="btn btn-warning">Kembali</a>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection