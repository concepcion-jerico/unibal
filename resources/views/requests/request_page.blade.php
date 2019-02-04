@extends('layouts.app')


@section('content')


<h1 class="text-center pt-4"> Confirmation of Request </h1>

	@if(Session::has("request_sent"))
	<div class="alert alert-success">
		{{ Session::get("request_sent") }}
	</div>
	@endif
<div class="container mt-5">

	<div class="row">
		{{-- <div class="col-md-8 offset-md-2"> --}}

		<div class="col-md-4">
			<img src="/{{$item->image_path}}" class="img-fluid">
		</div>

		<div class="col-md-8">
			
				<form action="/requests/{{ $item->id }}/confirm" method="POST">
					{{ csrf_field() }}
					{{ method_field("PATCH") }}

					<input name="item_id" value="{{ $item->id }}" hidden>			

					<label class="col-md-4">Name:</label>
					<input name="name" class="form-control col-md-8" value="{{ $item->name }}" disabled>				

					<label class="col-md-4">Serial Number:</label>
					<input name="serial_number" class="form-control col-md-8 mb-3" value="{{ $item->serial_number }}" disabled>
	 
 {{-- 					<label class="col-md-4">Description:</label>
					<textarea class="form-control col-md-8" disabled rows="5"> {{ $item->description }} </textarea> --}}

					<h5 class="form-control col-md-2 d-inline btn-green1 font-white"> {{ $item->status->name }}</h5>
					<small class="col-md-10">*Please return the laptop within five(5) days from the date of receipt.</small>

					@if($item->status_id == 3)
						<button type="submit" class="btn-primary btn m-2 col-md-8 offset-md-4 mt-3"> Confirm </button>
										
					@endif
				</form>
			
		</div> {{-- end cols-6 --}}

 	</div> {{-- end row --}}
</div> {{-- end container --}}














@endsection
