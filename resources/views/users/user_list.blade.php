@extends('layouts.app')


@section('content')

{{-- @if(Session::has("success_message"))
<div class="alert alert-success">
	{{ Session::get("success_message") }}
</div>
@endif --}}


<div class="container">
	<h1 class="text-center"> User Lists </h1>
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<table class="table table-hover table-sm">
				<thead class="text-center">
					<tr>
						<th>Student ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>User Type</th>
						<th>User Status</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)

					<tr>
						<td class="text-center">{{ $user->student_id }}</td>
						<td>{{ $user->firstname }}</td>
						<td>{{ $user->lastname }}</td>
						<td>{{ $user->email }}</td>
						<td class="text-center">{{ $user->role->name }}</td>
						<td class="text-center">{{ $user->userstatus->name }}</td>

						<td> 
							@if($user->userstatus_id == "2")
							<a href="/users/approve/{{ $user->id}}" class="btn btn-success btn-block"> Activate </a>

							@else
							<a href="/users/deactivate/{{ $user->id}}" class="btn btn-danger"> Deactivate </a>
							@endif
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>



		

		</div> {{-- end cols --}}
 	</div> {{-- end row --}}
</div> {{-- end container --}}














@endsection
