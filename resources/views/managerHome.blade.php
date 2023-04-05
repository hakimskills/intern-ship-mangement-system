@extends('layouts.app3')
@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>



        </div>
    </ul>
    </ul>
    <div class=" nav justify-content-center">
        <lord-icon class="ms-4"
                   src="https://cdn.lordicon.com/dqxvvqzi.json"
                   trigger="hover"
                   style="width:150px;height:150px">
        </lord-icon>

    </div>
    <p class="fw-bold text-center">Welcome {{ Auth::user()->name}} {{  Auth::user()->last_name }}</p>
@endsection
