@extends('layouts.app')


@section('content')

{{-- @if(Session::has("success_message"))
<div class="alert alert-success">
	{{ Session::get("success_message") }}
</div>
@endif --}}



<div class="container">
	<h1> Requests </h1>
	<div class="row">

		<div class="col-md-4">

			<div class="list-group" id="list-tab" role="tablist">
				<a href="#pending" class="list-group-item" data-toggle="list" role="tab"> Pending Requests
					<span class="badge badge-primary badge-pill">
					@if(Auth::user()->role_id == 1)
						{{ \App\LaptopRequest::whereIn('status_id', ['1', '6', '2'])->where('user_id', '=', Auth::user()->id)->get()->count() }}
					@else {{-- if user is ADMIN, it will show number of items that are pending request --}}
						{{ \App\LaptopRequest::whereIn('status_id', ['1'])->get()->count() }}

					@endif
					</span>

				</a>

		@if(Auth::user()->role_id == 2)
				<a href="#return" class="list-group-item" data-toggle="list" role="tab"> Pending Return / For Confirmation 
					<span class="badge badge-primary badge-pill">
					@if(Auth::user()->role_id == 1)
						{{ \App\LaptopRequest::whereIn('status_id', ['2','6'])->where('user_id', '=', Auth::user()->id)->get()->count() }}
					@else
						{{ \App\LaptopRequest::whereIn('status_id', ['2','6'])->get()->count() }}

					@endif
					</span>

				</a>
		@endif

				<a href="#history" class="list-group-item" data-toggle="list" role="tab"> History </a>
			</div>
 
		</div>





		@if(Auth::user()->role_id == 2)
		<div class="col-md-11">

		@else
		<div class="col-md-10">


		@endif

	
			<div class="tab-content">
				<div class="tab-pane" id="pending" role="tabpanel">
					<h3>Pending</h3>
					<table class="table table-hover table-sm">
						<thead class="text-center">
							<tr>
								@if(Auth::user()->role_id == 2)
								<th>User ID</th>
								<th>Student ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								@endif
								<th>Laptop Requested</th>
								<th>Status</th>
								<th>Action</th>
								<th>Date Requested</th>
							</tr>
						</thead>

						<tbody>
							@foreach($history as $laptoprequest)

							<tr>
							@if(Auth::user()->role_id == 1) {{-- if USER --}}
								{{-- if status is only pending and for return; pending confirmation of return --}}
								@if($laptoprequest->status_id == 1 || $laptoprequest->status_id == 2 || $laptoprequest->status_id == 6)


									<td class="text-center">{{ $laptoprequest->item->name }}</td>
									<td class="text-center">
										@if($laptoprequest->status_id == 2)
											Approved / Pending Return
										@endif

										@if($laptoprequest->status_id == 1)
											Pending Request Confirmation
										@endif
			 
										@if($laptoprequest->status_id == 6)
											Pending Return Confirmation
										@endif


			 
									</td>

									<td> 
										@if($laptoprequest->status_id == 2) {{-- if it is approved/already in use, button will show return button for user --}}
							
										<form action="/user_requests/return/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}
											
											<button type="submit" class="btn btn-danger btn-block"> Return </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>
									
										@endif
									</td>

									<td class="text-center">{{ $laptoprequest->item->created_at->format('F j, Y') }}</td>
								@endif
							{{-- ELSE IF  --}}

							@elseif(Auth::user()->role_id == 2) {{-- if ADMIN --}}
								@if($laptoprequest->status_id == 1)  {{-- if status is still pending for approval/rejection --}}
						

									@if(Auth::user()->role_id == 2)

									<td class="text-center">{{ $laptoprequest->user_id }}</td>
									<td class="text-center">{{ $laptoprequest->user->student_id }}</td>
									<td>{{ $laptoprequest->user->firstname }}</td>
									<td>{{ $laptoprequest->user->lastname }}</td>

									@endif

									<td class="text-center">{{ $laptoprequest->item->name }}</td>
									<td class="text-center">
										@if($laptoprequest->status_id == 2)
											Approved / Pending Return
										@endif

 
									</td>

									<td> 
	

										<form action="/user_requests/approval/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}

											<button type="submit" class="btn btn-success btn-block"> Approve </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>

										<form action="/user_requests/reject/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}
											
											<button type="submit" class="btn btn-danger btn-block"> Reject </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>

									</td>

									<td class="text-center">{{ $laptoprequest->item->created_at->format('F j, Y') }}</td>
								@endif
								
							@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div> {{-- end PENDING tab pane --}}
			
	@if(Auth::user()->role_id == 2) {{-- if ADMIN --}}

				<div class="tab-pane" id="return" role="tabpanel">
					<h5 class="mt-2">Pending Return / For Return Confirmation </h5>
					<table class="table table-hover table-sm">
						<thead class="text-center">
							<tr>

								<th>User ID</th>
								<th>Student ID</th>
								<th>First Name</th>
								<th>Last Name</th>

								<th>Laptop Requested</th>
								<th>Status</th>
								<th>Action</th>
								<th>Date Requested</th>
								<th>Date Returned</th>
							</tr>
						</thead>

						<tbody>
							@foreach($history as $laptoprequest)

							<tr>
								@if($laptoprequest->status_id == 2 || $laptoprequest->status_id == 6)
									

									<td class="text-center">{{ $laptoprequest->user_id }}</td>
									<td class="text-center">{{ $laptoprequest->user->student_id }}</td>
									<td>{{ $laptoprequest->user->firstname }}</td>
									<td>{{ $laptoprequest->user->lastname }}</td>

									

									<td class="text-center">{{ $laptoprequest->item->name }}</td>
									<td class="text-center">
										@if($laptoprequest->status_id == 2)
											Approved / Pending Return
										@endif
			 

										@if($laptoprequest->status_id == 6)
											Pending Return Confirmation
										@endif
			 
									</td>

									<td> 
										@if($laptoprequest->status_id == 6) {{-- if user requested a return, admin will see confirm return button--}}
					
										<form action="/user_requests/confirmreturn/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}
											
											<button type="submit" class="btn btn-success btn-block"> Confirm Return </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>
										
										@endif
									</td>

									<td class="text-center">{{ $laptoprequest->item->created_at->format('F j, Y') }}</td>
									@if($laptoprequest->status_id == 5)
									<td class="text-center">{{ $laptoprequest->item->updated_at->format('F j, Y') }}</td>
									@endif
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div> {{-- end PENDING RETURN tab pane --}}
	@endif

				<div class="tab-pane" id="history" role="tabpanel">
					<h3>History</h3>
					<table class="table table-hover table-sm">
						<thead class="text-center">
							<tr>
								@if(Auth::user()->role_id == 2)
								<th>User ID</th>
								<th>Student ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								@endif
								<th>Laptop Requested</th>
								<th>Status</th>
								<th>Action</th>
								<th>Date Requested</th>
								<th>Date Returned</th>
							</tr>
						</thead>

						<tbody>
							@foreach($history as $laptoprequest)

							<tr>
								@if($laptoprequest->status_id == 4 || $laptoprequest->status_id == 5)
									@if(Auth::user()->role_id == 2)

									<td class="text-center">{{ $laptoprequest->user_id }}</td>
									<td class="text-center">{{ $laptoprequest->user->student_id }}</td>
									<td>{{ $laptoprequest->user->firstname }}</td>
									<td>{{ $laptoprequest->user->lastname }}</td>

									@endif

									<td class="text-center">{{ $laptoprequest->item->name }}</td>
									<td class="text-center">
										@if($laptoprequest->status_id == 2)
											Approved / Pending Return
										@endif
			 
										@if($laptoprequest->status_id == 4)
											Rejected
										@endif

										@if($laptoprequest->status_id == 5)
											Returned
										@endif
			 
									</td>

									<td> 
										@if($laptoprequest->status_id == 1) {{-- if status is still pending for approval/rejection --}}


										<form action="/user_requests/approval/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}

											<button type="submit" class="btn btn-success btn-block"> Approve </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>

										<form action="/user_requests/reject/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}
											
											<button type="submit" class="btn btn-danger btn-block"> Reject </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>

										@elseif($laptoprequest->status_id == 2) {{-- if it is approved/already in use, button will show return button for user / confirm return for admin --}}
											@if(Auth::user()->role_id == 1) {{-- if user's role is USER --}}
										<form action="/user_requests/return/{{$laptoprequest->id}}" method="POST">
											{{ csrf_field() }}
											{{ method_field("PATCH") }}
											
											<button type="submit" class="btn btn-danger btn-block"> Return </button>
											<input type="text" name="item_id" value="{{ $laptoprequest->item_id }}" hidden>
										</form>
											@endif



										@endif
									</td>

									<td class="text-center">{{ $laptoprequest->item->created_at->format('F j, Y') }}</td>
									@if($laptoprequest->status_id == 5)
									<td class="text-center">{{ $laptoprequest->item->updated_at->format('F j, Y') }}</td>
									@endif
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div> {{-- end HISTORY tab pane --}}








			</div> {{-- end tab content --}}


		

		</div> {{-- end cols --}}
 	</div> {{-- end row --}}
</div> {{-- end container --}}







@endsection
