@extends('layouts.app')


@section('content')

<h1 class="text-center"> Add a new item </h1>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="" enctype="multipart/form-data" method="POST">
				{{ csrf_field() }}

				<div class="form-group row">
					<label for="name" class="col-md-4"> Name: </label>
					<input type="text" name="name" id="name" class="form-control col-md-8">
				</div>
				<div class="form-group row">
					<label for="serial_number" class="col-md-4"> Serial Number: </label>
					<input name="serial_number" id="serial_number" class="form-control col-md-8" cols="20">
				</div>
				<div class="form-group row">
					<label for="quantity" class="col-md-4"> Quantity: </label>
					<input type="number" name="quantity" id="quantity" class="form-control col-md-8" cols="20">
				</div>
				<div class="form-group row">
					<label for="description" class="col-md-4"> Description: </label>
					<textarea name="description" id="description" class="form-control col-md-8" cols="20"> </textarea>
				</div>				

				<div class="form-group row">
					<label for="category" class="col-md-4"> Category: </label>
					<select name="category" id="category" class="form-control mb-3 col-md-8">
							<option selected> Choose Operating System: </option>
						
						@foreach($categories as $category)

							<option value="{{ $category->id }}">{{ $category->name }}</option>

						@endforeach
					</select>
				</div>

				<div class="form-group row">
					<label for="image" class="col-md-4"> Upload Image: </label>
					<input type="file" name="image" id="image" class="form-control col-md-8">
				</div>
 
				{{-- hidden for status_id where default value is 3 (available) --}}
				<div class="form-group row">
					<input type="hidden" name="status_id" id="status_id" class="form-control col-md-8" value="3">
				</div>
 
				<button class="btn btn-success btn-block col-md-8 offset-md-2"> Add Item </button>

			

			</form>	{{-- end of form --}}	



		</div> {{-- end first cols --}}
	</div> {{-- end row --}}
</div> {{-- end container --}}





@endsection
