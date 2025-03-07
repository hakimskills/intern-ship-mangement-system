<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/log.css') }}">
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

    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid d-flex justify-content-between">
            <a style="width: 2.5rem ; margin-outside: 2rem ; " href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 379 235.54"><defs><style>.cls-1{fill:#008931;}.cls-2{fill:#6c63ff;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M303.5,0l1.06,0h.94Z"/><path class="cls-2" d="M355.1,18.56A79.52,79.52,0,0,0,304.56,0L226,0l33.51,40h44C323.07,40,339,52.79,339,68.5c0,7.65-4.26,18.38-13,23.5-4.78,2.8-10.77,4-15.45,4.58C328.34,96.54,396.76,91.76,355.1,18.56Z"/><path class="cls-2" d="M314.1,192.7a43.59,43.59,0,0,1-10.6,1.3H155.23l33.7,40H303.5c41.63,0,75.5-30.73,75.5-68.5A62.53,62.53,0,0,0,375.56,145C375.54,197,323.9,193.77,314.1,192.7Z"/><path class="cls-2" d="M356.76,117C370.49,104.59,379,87.43,379,68.5c0-19.68-9.21-37.43-23.9-49.94,41.66,73.2-26.76,78-44.55,78A56.31,56.31,0,0,1,303,97H98a20,20,0,0,0-20,20h0a20,20,0,0,0,20,20H303.5c19.57,0,35.5,12.79,35.5,28.5,0,12.75-10.49,23.57-24.9,27.2,9.8,1.07,61.44,4.26,61.46-47.66A67.92,67.92,0,0,0,356.76,117Z"/><path class="cls-2" d="M225.62,41,191.94,1C189.35,1.43,55.56,23.23,43.8,87.85c3.45-11.94,9.26-21.53,17.55-29,11.44-10.25,28-19.51,71.41-17.9Z"/><path class="cls-2" d="M56,172c-11.9-16.67-16-34.94-16-54a108.61,108.61,0,0,1,3.8-30.15C55.56,23.23,189.35,1.43,191.94,1H133.87C88.15-.65,58.46,7.77,34.65,29.11,11.66,49.72,0,79.62,0,118c0,27.36,8.07,52.07,24.67,75.55,20.31,28.72,49.52,42,93.48,42q7.69,0,16-.54H157.5l-33.29-39.53C88.65,194.49,66,186,56,172Z"/></g></g></svg>
            </a>
            <div class="d-flex">
                @if (Route::has('login') && Route::has('register'))
                    <a class="nav-link active mx-2" aria-current="page" href="/">
                        Home
                    </a>
                @endif
                @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->type=='user')
                            <a class="nav-link active mx-2" aria-current="page" href="/home">
                                My account
                            </a>
                        @endif
                        @if(Auth::user()->type=='admin')
                            <a class="nav-link active mx-2" aria-current="page" href="/admin/home">
                                My account
                            </a>
                        @endif
                        @if(Auth::user()->type=='manager')
                            <a class="nav-link active mx-2" aria-current="page" href="/manager/home">
                                My account
                            </a>
                        @endif
                    @endauth
                @endif
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link mx-2" href="{{ route('login') }}">
                            Login
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a class="nav-link mx-2" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                @endguest

            </div>
        </div>
    </nav>

</div>












<main class="py-4">
    @yield('content')
</main>

</body>
</html>
