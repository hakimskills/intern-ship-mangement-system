<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

            <nav class="navbar navbar-dark bg-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><i class="fa-solid fa-bars"></i> Menu</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ms-4" >
                                @if (Route::has('login') && Route::has('register') )
                                <li class="nav-item">

                                    <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house "></i>
                                        Home</a>
                                </li>
                                @endif
                                    @if (Route::has('login'))
                                        @auth
                                        @if(Auth::user()->type=='user')
                                        <li class="nav-item">

                                             <a class="nav-link active" aria-current="page" href="/home"><i class="fa-solid fa-user"></i> My account</a>
                                        </li>
                                        @endif
                                            @if(Auth::user()->type=='admin')
                                                <li class="nav-item">

                                                        <a class="nav-link active" aria-current="page" href="/admin/home"><i class="fa-solid fa-user"></i> My account</a>
                                                </li>
                                            @endif
                                            @if(Auth::user()->type=='manager')
                                                <li class="nav-item">

                                                    <a class="nav-link active" aria-current="page" href="/manager/home"><i class="fa-solid fa-user"></i> My account</a>
                                                </li>
                                            @endif
                                    @endauth

                                    @endif
                                    @guest
                                        @if (Route::has('login'))

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-key fa-rotate-270"></i> Login</a>
                                </li>
                                        @endif
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}"> <i class="fa-solid fa-address-card"></i> {{ __('Register fro students') }}</a>
                                                </li>
                                            @endif
                                    @endguest


                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

        </div>







            </div>




        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
