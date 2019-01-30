@extends('layouts.app')


@section('content')


<div class="container">
	<h1> Edit Laptop Details: </h1>

	@if(Session::has("success_message"))
	<div class="alert alert-success">
		{{ Session::get("success_message") }}
	</div>
	@endif

	<div class="row">
		@if(count($errors)>0)
			@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		@endif
	</div> {{-- end row 2 --}}


	<div class="row">
		<div class="col-md-8 offset-md-2">

			<form action="/laptops/{{ $item->id }}" enctype="multipart/form-data" method="POST">
					{{ csrf_field() }}
					{{ method_field("PATCH") }}

					<div class="form-group row">
						<label for="name" class="col-md-4"> Name: </label>
						<input type="text" name="name" id="name" class="form-control col-md-8" value="{{ $item->name }}">
					</div>
					<div class="form-group row">
						<label for="serial_number" class="col-md-4"> Serial Number: </label>
						<input name="serial_number" id="serial_number" class="form-control col-md-8" cols="20" value="{{ $item->serial_number }}">
					</div>
					<div class="form-group row">
						<label for="quantity" class="col-md-4"> Quantity: </label>
						<input type="number" name="quantity" id="quantity" class="form-control col-md-8" cols="20" value="{{ $item->quantity }}">
					</div>
					<div class="form-group row">
						<label for="description" class="col-md-4"> Description: </label>
						<textarea name="description" id="description" class="form-control col-md-8" cols="50">
							{{ $item->description }}
						</textarea>
					</div>				

					<div class="form-group row">
						<label for="category" class="col-md-4"> Category: </label>
						<select name="category" id="category" class="form-control mb-3 col-md-8">
								<option selected> Choose Operating System: </option>
							
							@foreach($categories as $category)

								<option value="{{ $category->id }}" {{ $category->id == $item->category_id ? "selected" : "" }} >
									{{ $category->name }}
								</option>

							@endforeach
						</select>
					</div>

					<div class="form-group row">
						<label for="image" class="col-md-4"> Upload Image: </label>
						<input type="file" name="image" id="image" class="form-control col-md-8">
					</div>

					<div class="form-group row">
						<label for="status_id" class="col-md-4"> Status: </label>
						<input type="text" name="status_id" id="status_id" class="form-control col-md-8" value="{{ $item->status_id }}">
					</div>

					<button class="btn btn-success btn-block col-md-8 offset-md-2"> Update Item </button>

				

				</form>	{{-- end of form --}}	
			</div> {{-- end cols --}}
	

 	</div> {{-- end row 2 --}}


</div> {{-- end container --}}














@endsection
