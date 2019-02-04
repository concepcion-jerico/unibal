@extends('layouts.app')


@section('content')



<div class="container pt-4 myfont">



	<h2 class="text-center"> Edit User Info </h2>

		@if(Session::has("password_match"))
		<div class="alert alert-danger">
			{{ Session::get("password_match") }}
		</div>
		@endif

	<div class="row">
		<div class="col-md-8 offset-md-2">

			<form action="/users/edit/update/{{ $user->id }}" method="POST">
				{{ csrf_field() }}
				{{ method_field("PATCH") }}

				<div class="form-group row">
					<label for="firstname" class="col-md-4"> First Name: </label>
					<input type="text" name="firstname" id="firstname" class="form-control col-md-8" value="{{ $user->firstname }}">
				</div>
				<div class="form-group row">
					<label for="lastname" class="col-md-4"> Last Name: </label>
					<input name="lastname" id="lastname" class="form-control col-md-8" cols="20" value="{{ $user->lastname }}">
				</div>
				<div class="form-group row">
					<label for="student_id" class="col-md-4"> Student ID: </label>
					<input name="student_id" id="student_id" class="form-control col-md-8" cols="20" value="{{ $user->student_id }}">
				</div>
				<div class="form-group row">
					<label for="email" class="col-md-4"> Email: </label>
					<input name="email" id="email" class="form-control col-md-8" cols="50" value="{{ $user->email }}">
				
				</div>				

				<div class="form-group row">
					<label for="role_id" class="col-md-4"> Role: </label>
					<select name="role_id" id="role_id" class="form-control col-md-8">
												
						@foreach($roles as $role)

							<option value="{{ $role->id }}" {{ $role->id == $user->role_id ? "selected" : "" }} >
								{{ $role->name }}
							</option>

						@endforeach
					</select>
				</div>

				<div class="form-group row">
					<label for="oldpassword" class="col-md-4"> Old Password: </label>
					<input name="oldpassword" id="oldpassword" class="form-control col-md-8" cols="50" value="{{ $user->password }}">
				
				</div>	
				<div class="form-group row">
					<label for="newpassword" class="col-md-4"> New Password: </label>
					<input type="password" name="newpassword" id="newpassword" class="form-control col-md-8" cols="50">
				
				</div>		
 
				<div class="form-group row">
					<label for="password_confirm" class="col-md-4"> Confirm New Password: </label>
					<input type="password" name="password_confirm" id="password_confirm" class="form-control col-md-8" cols="50" value="{{ $user->password_confirm }}">
				
				</div>		
 

				<button class="btn btn-success btn-block col-md-8 offset-md-2 btn-green1"> Update User </button>

				

			</form>	{{-- end of form --}}	


		

		</div> {{-- end cols --}}
 	</div> {{-- end row --}}
</div> {{-- end container --}}














@endsection
