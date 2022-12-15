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
					<div class="card-body">
						<h5 class="text-center mb-3"><strong>Pilih Berdasarkan Kategori yang anda mau.</strong></h5>
						<div class="row">
							@foreach($category as $index => $row)
							<div class="col-lg-4 col-sm-3">
								<div class="card btn btn-outline-info" style="border-color: transparent;">
									<div class="card-body p-1 ">
										<a href="{{route('homepage.index')}}?category_id={{$row->id}}" class="text-decoration-none text-muted">
											<i class="fa fa-{{$row->icon}} fs-3"></i>
											<div style="font-size: 12px;">{{$row->name}}</div>
										</a>
									</div>
								</div>	
							</div>
							@endforeach
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection