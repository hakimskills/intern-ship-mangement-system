@extends('layouts.app3')
@section('content')
    <div class="nav justify-content-center">
        <h3 style="color: #6c63ff">More details</h3>
    </div>
    <h4 style="margin-left: 90px">{{$offer->message}}</h4>
    <a style="text-decoration: none; margin-left: 90px; margin-top: 8rem;" href="{{ route('accept.offer', $offer->id) }}">
        <button class="custom-btn btn-5" style="text-decoration: none; margin-top: 2rem;"><span>send</span></button>
    </a>
@endsection
