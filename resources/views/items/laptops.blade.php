@extends('layouts.app')


@section('content')

{{-- @if(auth::check()) --}}



<div class="container pt-4 myfont">
	@if(Session::has("success_message"))
	<div class="alert alert-success">
		{{ Session::get("success_message") }}
	</div>
	@endif
	<h1 class="text-center"> Laptops </h1>
	<div class="row">
		<div class="col-md-12 text-center">

			@if($laptoprequest != 0) 
				<p><small>*Request access has been disabled due to currently borrowed laptop not yet returned by the User</small></p>
			@endif

			@if (Auth::user()->role_id == "2" )
			<a href="/laptops/add" class="btn btn-success mb-2"> Add New Item </a>
			@endif

			<form action="/laptops/search" method="POST" class="row">

				{{ csrf_field() }}

				<div class="form-group mb-0 offset-md-4 col-md-4">
					{{-- <label for="searchbar"> Search: </label> --}}
					<input type="search" name="searchbar" id="searchbar" class="form-control mb-1">
					<button class="btn btn-outline-dark mb-2 btn-block"> Search </button>
				</div>
			</form>
			<div class="btn-group">
				<a href="/laptops" class="btn btn-primary"> All </a>
				
				{{-- filter per category --}}
				@foreach (App\Category::all() as $category)
					<a href="/laptops/categories/{{ $category->id }}" class="btn btn-primary"> {{ $category->name }}</a>

				@endforeach
			</div>

			{{-- filter per status (if available) --}}
			<a href="/laptops/status/available" class="btn btn-outline-success"> Available only </a>


		</div> {{-- end first cols --}}
	</div> {{-- end row --}}


		{{-- laptops --}}

	<div class="row">

		@foreach($items as $indiv_item)
		<div class="col-md-4">
				<div class="card h-100">
					<div class="card-header">
						<img src="/{{ $indiv_item->image_path }}" class="card-img-top">
					</div>

					<div class="card-body">

						<h5 class="card-title"> {{ $indiv_item->name }}</h5>
						<p class="card-text text-justify"> {{$indiv_item->description}} </p>

						{{-- admin will only view this --}}
						<p> {{$indiv_item->serial_number}} </p>
					
					</div> {{-- end card body --}}

					<div class="card-footer">
						<form action="/addToRequest/{{ $indiv_item->id }}" method="POST">
							{{ csrf_field() }}

							<div class="form-group">
								{{-- <label for="quantity" class="mt-2"> Quantity: </label> --}}
								{{-- <input type="number" min=0 name="quantity" id="quantity" class="form-control my-2"> --}}
							
								{{-- if it is empty; user can access buttons below --}}
								@if($laptoprequest == 0) 
									{{-- if item status is available --}}
									@if($indiv_item->status_id == "3")
									<a href="/requests/{{$indiv_item->id }}" class="btn btn-success btn-block"> 
										Request for Approval
									</a>


									@elseif($indiv_item->status_id == "2")
									<button class="btn btn-danger btn-block" disabled> 
										Already in Use
									</button>							

									@elseif($indiv_item->status_id == "1")
									<button class="btn btn-info btn-block" disabled> 
										Pending User Request
									</button>

									@endif

								@else
									<button class="btn btn-info btn-danger btn-block" disabled> 
										Disabled
									</button>
									
								@endif
							
							</div>
						</form>

						{{-- admin should only view this --}}
					@if (Auth::user()->role_id == "2" )
						<a href="/laptops/{{ $indiv_item->id }}" class="btn btn-block btn-outline-primary"> View Details </a>
					@endif
					</div>

				</div> {{-- end card --}}
		</div> {{-- end cols --}}
		@endforeach

 	</div> {{-- end row --}}
</div> {{-- end container --}}



{{-- @else
	{{return redirect('auth.login')}}
@endif --}}








@endsection
