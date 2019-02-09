@extends('layouts.app')


@section('content')

{{-- @if(auth::check()) --}}



<div class="container pt-4 myfont">
	@if(Session::has("success_message"))
	<div class="alert alert-success">
		{{ Session::get("success_message") }}
	</div>
	@endif
	<h1 class="text-center"> Categories </h1>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<button class="btn btn-green1 font-white" data-toggle="modal" data-target="#addCategory"> Add New Category </button>
			<table class="table table-hover table-sm">
					<thead class="text-center bg-blue font-white">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($categories as $category)
						<tr>
					
								<td class="text-center">{{ $category->id }}</td>
								<td class="text-center">
									<form method="POST" action="/category/{{ $category->id }}/edit">
										{{ csrf_field() }}
										{{ method_field("PATCH") }}
										<input type="text" name="name" value="{{ $category->name }}" class="">
										<button type="submit" class="btn btn-success btn-green1"> Update </button>
										
									</form>

										
										
									</form>
								</td>
								<td class="text-center">{{ $category->created_at->format('F j, Y') }}</td>
							

								<td class="text-center"> 
							
									<button class="btn btn-danger btn-red1" data-toggle="modal" data-target="#confirmDelete"> Delete </button>
								</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			{{-- addCategory MODAL --}}
			<div class="modal fade" id="addCategory" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Add New Category</h4>
						</div>
						
						<div class="modal-body">
							<form method="POST" action="/category/add">
								{{ csrf_field() }}
								<label for="catname">Category Name: </label>
								<input type="text" name="catname" id="catname" class="form-control mb-1">
								<button type="submit" class="btn btn-success"> Add </button>					
								<button type="button" class="btn btn-white" data-dismiss="modal"> Cancel </button>
							</form>
							
						</div>
			
					</div>
				</div>
			</div> {{-- end of  modal --}}

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
						<form method="POST" action="/category/{{ $category->id }}/delete">
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



{{-- @else
	{{return redirect('auth.login')}}
@endif --}}








@endsection
