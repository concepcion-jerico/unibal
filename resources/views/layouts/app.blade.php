<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- favicon --}}
    <link rel="icon" href="/images/logo.png" type="image/gif">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'UNI-BAL')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav id="mainNav" class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a id="title" class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo" src="/images/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="ulright navbar-nav mr-auto">
                        @guest

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link font-weight-bold active1" href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->student_id }} <span class="caret"></span>
                            </a>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="ulright navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest 
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold alink {{Request::routeIs('login') ? 'active1' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold alink {{Request::routeIs('register') ? 'active1' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            

                                <li class="nav-item">
                                    <a class="nav-link alink {{Request::routeIs('laptops') ? 'active1' : '' }}" href="/laptops"> Laptops </a>
                                </li>

                                 @if (Auth::user()->role_id == "1" ) {{-- if a USER --}}
                                <li class="nav-item">
                                    <a class="nav-link alink {{Request::routeIs('requests') ? 'active1' : '' }}" href="/history/user"> Requests 
                                        <span class="badge badge-primary badge-pill">
                                        @if(Auth::user()->role_id == 1)
                                            {{ \App\LaptopRequest::whereIn('status_id', ['1', '6', '2'])->where('user_id', '=', Auth::user()->id)->get()->count() }}
                                        @endif
                                        </span>

                                    </a>
                                </li>
                                @endif
                                {{-- to check if user is an admin, it will show the nav links below --}}
                                @if (Auth::user()->role_id == "2" )
                                <li class="nav-item">
                                    <a class="nav-link alink {{Request::routeIs('categories') ? 'active1' : '' }}" href="/categories"> Categories </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link alink {{Request::routeIs('requests') ? 'active1' : '' }}" href="/history"> Requests 
                                        <span class="badge badge-primary badge-pill">
                                        @if (Auth::user()->role_id == 2){{-- if user is ADMIN, it will show number of items that are pending request --}}
                                            {{ \App\LaptopRequest::whereIn('status_id', ['1', '6', '2'])->get()->count() }}

                                        @endif
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link alink {{Request::routeIs('users') ? 'active1' : '' }}" href="/users"> Users </a>
                                </li>
                                
{{--                                 <li class="nav-item">
                                    <a class="nav-link" href="/user_requests"> User Requests </a>
                                </li> --}}
      
                                @endif
     
                                <li>
                                    <a class="nav-link alink" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               
                                </li>
                            

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mainSection">
            @yield('content')
        </main>
    </div>



<script src="/js/script.js"></script>


</body>
</html>
