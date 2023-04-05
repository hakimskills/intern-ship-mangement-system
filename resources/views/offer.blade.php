@if( Auth::user()?->type=='user')
@extends('layouts.app3')
    @section('content')
        <ul class="nav justify-content-center">
            <div class="navbar1 justify-content-center">
                <a class="nav-link1 nav-link-ltr1" href="/home">profil</a>
                <a class="nav-link1 nav-link-ltr1" href="/form">send requests </a>
                <a class="nav-link1 nav-link-ltr1" href="#">offers</a>
                <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>


            </div>
        </ul>
        <div class="container px-4 py-5 border-1" id="featured-3">
            <h2 class="pb-2 border-bottom">Offers from companies</h2>

            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                @foreach ($offers as $offer)

                <div class="feature col">

                    <div class="feature-icon d-inline-flex align-items-center justify-content-center  bg-gradient fs-2 mb-3">

                        <i class="fa-regular fa-handshake"></i>
                    </div>

                    <h3 class="fs-2">{{ $offer->company_name }} are looking for:{{ $offer->post }}</h3>
                    <p>{{ $offer->message }}</p>
                    <a href="#" class="icon-link">
                        Call to action
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    @endsection

@endif
