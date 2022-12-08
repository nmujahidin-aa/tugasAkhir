@extends('layout.HomePage.master')
@section('title', 'Homepage')
@section('content')

<div class="container">
	<div style="margin-top: 65px;">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				@foreach($table as $index => $row)
				<div class="card" style="margin-top: 10px;">
					
					<div class="card-body">
						
						<div>
							<strong>{{$row->title}}</strong>
						</div>

						<div class="mt-2">
							<span class="text-center " style="padding-bottom: 3px; padding-left: 10px; padding-right: 10px; max-width: 15%; background-color: #C5E8E5; font-size: 13px;">{{$row->category->name ?? ""}}</span>
							<span class="text-muted" style="font-size: 13px;"><i class="bx bx-history"></i>{{date('d-m-Y',strtotime($row->published_at))}}</span>
						</div>

						<div class="mt-4">
							<p style="font-weight: bold;">{{$row->author}}</p>
							<span>Description:</span>
							<p>{{$row->description}}</p>
						</div>

						<div class="mt-2">
							<a href="{{ Storage::url($row->file) }}" download class="btn btn-sm btn-outline-success rounded-pill">Donwload</a>
						</div>

					</div>
				</div>
				@endforeach
			</div>


			<div class="col-lg-4 col-md-12">
				<div class="card" style="margin-top: 10px;">
					<div class="card-body"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection