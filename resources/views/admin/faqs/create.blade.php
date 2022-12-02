@extends('admin.masteradmin')
@section('content')

<div class="container">
	<h3>Create Faq</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.faqs.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div class="my-3">
						<label>Question</label>
						<input type="text" name="question" class="form-control">
					</div>
					
					<div class="my-3">
						<label>Answer</label>
						<textarea class="form-control" name="answer"></textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.faqs.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>

@endsection