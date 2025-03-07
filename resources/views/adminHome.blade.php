@extends('layouts.app3')


@section('content')

    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/admin/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/list">list of requests</a>


        </div>
    </ul>
    </ul>
    <div class=" nav justify-content-center">
        <svg style="width:6rem;height: 6rem; margin-top: 2rem; margin-bottom: 2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 405 405"><defs><style>.cls-1{fill:#6c63ff;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M202.5,0C90.66,0,0,90.66,0,202.5S90.66,405,202.5,405,405,314.34,405,202.5,314.34,0,202.5,0Zm0,66.48a56.25,56.25,0,1,1-56.25,56.25A56.24,56.24,0,0,1,202.5,66.48ZM302.73,294.55a6.23,6.23,0,0,1-6.22,6.22h-188a6.23,6.23,0,0,1-6.22-6.22h0a81.13,81.13,0,0,1,80.88-80.89h38.7a81.13,81.13,0,0,1,80.88,80.89Z"/></g></g></svg>


    </div>
    <p class="fw-bold text-center">Welcome {{ Auth::user()->name}} {{  Auth::user()->last_name }}</p>



@endsection
