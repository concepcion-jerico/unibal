@extends('layouts.app')



@section('content')
<div class="container-fluid bg-reg">
    <div class="row justify-content-center">

        <div class="col-md-6 fluid">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div id="firstcarousel" class="carousel-item active carou">
                  {{-- <img class="d-block w-100 h-100" src="/images/frost.jpg" alt="First slide"> --}}
                  <h1 id="regheader">UNIVERSITY'S BORROW-A-LAPTOP SYSTEM</h1>
                  
                </div>
                <div class="carousel-item carou">
                  {{-- <img class="d-block w-100" src="/images/frost.jpg" alt="First slide"> --}}
                  <h1 id="regheader2">UNIVERSITY'S BORROW-A-LAPTOP SYSTEM</h1>
                </div>
                <div class="carousel-item carou">
                  {{-- <img class="d-block w-100" src="/images/veryblue.jpg" alt="First slide"> --}}
                  <h1 id="regheader">UNIVERSITY'S BORROW-A-LAPTOP SYSTEM</h1>
                </div>
              </div>
            </div>
        </div> {{-- end of first 6 cols --}}





        <div class="col-md-5 mt-5">
            <div class="card">
                <div class="card-header text-center myfont bg-white lead font-weight-bold">{{ __('STUDENT\'S ACCOUNT REGISTRATION') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="myfont">
                        @csrf

                        {{-- firstname --}}
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label-lg text-md-right">{{ __('First 
                        Name: ') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} border-bottom-color" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="Juan">

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- lastname --}}
                         <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label-lg text-md-right">{{ __('Last 
                        Name: ') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} border-bottom-color" name="lastname" value="{{ old('lastname') }}" required autofocus placeholder="Dela Cruz">

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         {{-- studentID --}}
                         <div class="form-group row">
                            <label for="student_id" class="col-md-4 col-form-label-lg text-md-right">{{ __('Student 
                        ID: ') }} </label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control{{ $errors->has('student_id') ? ' is-invalid' : '' }} border-bottom-color" name="student_id" value="{{ old('student_id') }}" required autofocus placeholder="BSIT1AXX">

                                @if ($errors->has('student_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
 
                        {{-- email address --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label-lg text-md-right">{{ __('E-Mail Address:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} border-bottom-color" name="email" value="{{ old('email') }}" required placeholder="myemail@email.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label-lg text-md-right">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} border-bottom-color" name="password" required placeholder="Input at least six(6) characters">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label-lg text-md-right">{{ __('Confirm Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control border-bottom-color" name="password_confirmation" required placeholder="Input at least six(6) characters">
                            </div>
                        </div>
                        {{-- hidden inputs to set default role_id as User and user_statuses_id as Inactive--}}
                        <div class="form-group row mb-0">
                           <input id="role_id" type="hidden" name="role_id" value="1">
                           <input id="userstatus_id" type="hidden" name="userstatus_id" value="2">
                        </div>

                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-block bg-colorgr">
                                    {{ __('REGISTER') }}
                                </button>
                            </div>
                        </div>
    
    

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
