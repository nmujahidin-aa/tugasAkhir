@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Edit Faq</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.faqs.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
					<div class="my-3">
						<input type="text" value="{{$result->question}}" name="question" class="form-control">
					</div>
					<div>
						<label>Answer</label>
						<textarea class="form-control" name="answer">{{$result->answer}}</textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.faqs.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection