@extends('layouts.app')


@section('content')

{{-- @if(Session::has("success_message"))
<div class="alert alert-success">
	{{ Session::get("success_message") }}
</div>
@endif --}}

<h1 class="text-center"> User Requests </h1>


{{-- PENDING REQUESTS================================= --}}
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">

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
					</tr>
				</thead>

				<tbody>
					@foreach($pending as $laptoprequest)

					<tr>
						<td class="text-center">{{ $laptoprequest->user_id }}</td>
						<td class="text-center">{{ $laptoprequest->user->student_id }}</td>
						<td>{{ $laptoprequest->user->firstname }}</td>
						<td>{{ $laptoprequest->user->lastname }}</td>
						<td>{{ $laptoprequest->item->name }}</td>
						<td class="text-center">
							@if($laptoprequest->status_id == 1)
								Pending Request
							@endif

							@if($laptoprequest->status_id == 2)
								Approved
							@endif
 
							@if($laptoprequest->status_id == 4)
								Rejected
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
							@endif
						</td>

						<td>{{ $laptoprequest->item->created_at->format('F j, Y') }}</td>

					</tr>
					@endforeach
				</tbody>
			</table>



		

		</div> {{-- end cols --}}
 	</div> {{-- end row --}}
</div> {{-- end container --}}

















@endsection
