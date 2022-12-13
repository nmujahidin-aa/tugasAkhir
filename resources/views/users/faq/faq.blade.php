@extends('layout.HomePage.master')
@section('title', 'News')
@section('content')

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
	<div class="row">
		<div class="col">
			
			<div class="accordion accordion-flush" id="accordionFlushExample">
				@foreach($table as $index => $row)
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$index}}" aria-expanded="false" aria-controls="flush-collapseOne-{{$index}}">
			        #{{$index+1}} {{$row->question}}
			      </button>
			    </h2>
			    <div id="flush-collapseOne-{{$index}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body">{{$row->answer}}</div>
			    </div>
			  </div>
			  @endforeach
			</div>

		</div>
	</div>
</div>

@endsection