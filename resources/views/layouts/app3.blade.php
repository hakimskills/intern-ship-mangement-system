<?php
// Store the content in a variable
ob_start();
?>
    <!-- Content -->
@yield('content')
<?php
$content = ob_get_clean();
?>
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="{{asset('js/javaS.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    @php
        $user = Auth::user();
        $notifications = null;
        $notifications = $notifications ?? [];

        $notificationCount = 0;


        $notifications = App\Models\Notification::whereIn('student_id', [Auth::user()->id])->orderBy('created_at', 'desc')->get();
        $notificationCount=$notifications->count();

    @endphp


    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <a style="width: 2.5rem; margin-outside: 2rem;" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 379 235.54"><defs><style>.cls-1{fill:#008931;}.cls-2{fill:#6c63ff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M303.5,0l1.06,0h.94Z"/><path class="cls-2" d="M355.1,18.56A79.52,79.52,0,0,0,304.56,0L226,0l33.51,40h44C323.07,40,339,52.79,339,68.5c0,7.65-4.26,18.38-13,23.5-4.78,2.8-10.77,4-15.45,4.58C328.34,96.54,396.76,91.76,355.1,18.56Z"/><path class="cls-2" d="M314.1,192.7a43.59,43.59,0,0,1-10.6,1.3H155.23l33.7,40H303.5c41.63,0,75.5-30.73,75.5-68.5A62.53,62.53,0,0,0,375.56,145C375.54,197,323.9,193.77,314.1,192.7Z"/><path class="cls-2" d="M356.76,117C370.49,104.59,379,87.43,379,68.5c0-19.68-9.21-37.43-23.9-49.94,41.66,73.2-26.76,78-44.55,78A56.31,56.31,0,0,1,303,97H98a20,20,0,0,0-20,20h0a20,20,0,0,0,20,20H303.5c19.57,0,35.5,12.79,35.5,28.5,0,12.75-10.49,23.57-24.9,27.2,9.8,1.07,61.44,4.26,61.46-47.66A67.92,67.92,0,0,0,356.76,117Z"/><path class="cls-2" d="M225.62,41,191.94,1C189.35,1.43,55.56,23.23,43.8,87.85c3.45-11.94,9.26-21.53,17.55-29,11.44-10.25,28-19.51,71.41-17.9Z"/><path class="cls-2" d="M56,172c-11.9-16.67-16-34.94-16-54a108.61,108.61,0,0,1,3.8-30.15C55.56,23.23,189.35,1.43,191.94,1H133.87C88.15-.65,58.46,7.77,34.65,29.11,11.66,49.72,0,79.62,0,118c0,27.36,8.07,52.07,24.67,75.55,20.31,28.72,49.52,42,93.48,42q7.69,0,16-.54H157.5l-33.29-39.53C88.65,194.49,66,186,56,172Z"/></g></g></svg>

            </a>
            <div class="d-flex">

                @if ($notifications && count($notifications) > 0)
                    <div class="dropdown" style="cursor: pointer">
                        <a class="nav-link active dropdown-toggle" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="badge bg-danger" style="font-size: 0.4rem; position: absolute; top: 0; transform: translateY(-30%); left: -50%;">
                {{ $notificationCount ?? 0 }}
            </span>
                            <i class="fa-solid fa-bell" style="color: #6c63ff"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown" >
                            @foreach ($notifications as $notification)
                                <li id="notification_{{ $notification->id }}">
                                    <div id="{{ $notification->id }}" style="display: inline">
                                        <form method="POST" action="{{ route('not.delete', $notification->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a class="dropdown-item" href="{{ route('recentReq') }}" style="font-size: 12px; @if (strpos($notification->message, 'refuse') !== false) background-color: #fcb1a2; border: 1px solid white; color: black; @elseif (strpos($notification->message, 'accept') !== false) background-color: #edf7df; border: 1px solid white; color: black; @endif">
                                                {{ $notification->message }}
                                                <button type="submit" class="btn-close" aria-label="Close" style=""></button>
                                            </a>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <a class="nav-link active mx-4 " aria-current="page" href="{{ url('/') }}" style="color: #6c63ff;font-weight: bold"> Home</a>
                @if (Auth::user()->type == 'user' || Auth::user()->type == 'manager' || Auth::user()->type == 'admin')
                    <a class="nav-link  " href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color: #6c63ff;font-weight: bold">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </div>
        </div>
    </nav>










</div>


<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

<main class="py-5">
    @yield('content')



    <!--  -->


    </div>

</main>

</body>


</html>
