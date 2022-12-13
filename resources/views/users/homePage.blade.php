@extends('layout.HomePage.master')
@section('title', 'Homepage')
@section('content')

<div class="container">
	<div style="margin-top: 65px;">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				@foreach($table as $index => $row)
				<div class="card shadow-sm my-3" style="margin-top: 10px; border-radius: 10px;">
					
					<div class="card-body">
						
						<div>
							<strong>{{$row->title}}</strong>
						</div>

						<div class="mt-2">
							<span class="text-center" style="font-size: 13px;"><mark class="px-2 py-1" style="background-color: #C5E8E5;">{{$row->category->name ?? ""}}</mark> </span>
							<span class="text-muted" style="font-size: 13px;"><i class="fa fa-history"></i> {{date('d-m-Y',strtotime($row->published_at))}}</span>
						</div>

						<div class="mt-4">
							<p style="font-weight: bold;">{{$row->author}}</p>
							<span>Description:</span>
							<p>{{$row->description}}</p>
						</div>
						<hr>
						<div class="mt-2">
							<a href="{{ Storage::url($row->file) }}" download class="btn btn-sm btn-outline-success rounded-pill">Donwload</a>
						</div>

					</div>
				</div>
				@endforeach

				<div>
					{!!$table->links()!!}
				</div>
			</div>


			<div class="col-lg-4 col-md-12">
				<div class="card shadow-sm my-3" style="margin-top: 10px;">
					<div class="card-body"></div>
				</div>
			</div>
			
			<div style="position: fixed; bottom: 20px; left: 90%;">
				<div class="collapse" id="collapseExample">
				  <div class="card card-body ">
				    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
				  </div>
				</div>
				<p>
				  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				    <span><i class="fa fa-question-circle"></i> </span>
				  </button>
				</p>
			</div>

		</div>
	</div>
</div>
@endsection