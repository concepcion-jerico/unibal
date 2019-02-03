@extends('layouts.app')


@section('content')


<div class="container pt-4">
	<h1> Details: </h1>
	<div class="row">
		<div class="col-md-4">
			<img src="/{{$items->image_path}}" class="img-fluid">
		</div>

		<div class="col-md-6">
			<div class="row">
				<h4 class="col-md-4">Name:</h4>
				<h5 class="col-md-8">{{ $items->name }}</h5>				

				<h4 class="col-md-4">Serial Number:</h4>
				<h5 class="col-md-8">{{ $items->serial_number }}</h5>
 
				<h4 class="col-md-4">Quantity:</h4>
				<h5 class="col-md-8">{{ $items->quantity }}</h5>
 
				<h4 class="col-md-4">Description:</h4>
				<h5 class="col-md-8">{{ $items->description }}</h5>


				<a href="/laptops/{{ $items->id }}/edit" class="btn-primary btn m-2 col-md-4 offset-md-4"> Edit Details </a>
				<button class="btn btn-danger m-2 col-md-4" data-toggle="modal" data-target="#confirmDelete"> Delete Item </button>

			</div> {{-- end row --}}
		</div> {{-- end cols-6 --}}

		{{-- delete modal --}}
		<div class="modal fade" id="confirmDelete" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Confirm Delete</h4>
					</div>
					
					<div class="modal-body">
						<p>Are you sure you want to delete this item? </p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white" data-dismiss="modal"> Cancel </button>
						<form method="POST" action="/laptops/{{ $items->id }}/delete">
							{{ csrf_field() }}
							{{ method_field("DELETE") }}

							<button type="submit" class="btn btn-danger"> Confirm </button>					
						</form>
					</div>
				</div>
			</div>
		</div> {{-- end of delete modal --}}
	

 	</div> {{-- end row --}}


</div> {{-- end container --}}














@endsection
