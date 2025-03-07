@extends('layouts.app3')

@section('content')

    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>
            <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>
            <a class="nav-link1 nav-link-ltr1" href="/mark">interns finshed</a>


        </div>

    </ul>

        <!-- Student Profile -->
        <div class="student-profile py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm " style="border-color: #6c63ff">
                            <div class="card-header bg-transparent text-center">
                                <svg style="width:6rem;height: 6rem; margin-top: 2rem; margin-bottom: 2rem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 405 405"><defs><style>.cls-1{fill:#6c63ff;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M202.5,0C90.66,0,0,90.66,0,202.5S90.66,405,202.5,405,405,314.34,405,202.5,314.34,0,202.5,0Zm0,66.48a56.25,56.25,0,1,1-56.25,56.25A56.24,56.24,0,0,1,202.5,66.48ZM302.73,294.55a6.23,6.23,0,0,1-6.22,6.22h-188a6.23,6.23,0,0,1-6.22-6.22h0a81.13,81.13,0,0,1,80.88-80.89h38.7a81.13,81.13,0,0,1,80.88,80.89Z"/></g></g></svg>                                <h3> {{ Auth::user()->name}} {{  Auth::user()->last_name }}</h3>
                            </div>
                            <div class="card-body" style="border-color: #6c63ff">
                                <p class="mb-0"><strong class="pr-1">Social number:</strong>{{ Auth::user()->social_num}}</p>
                                <p class="mb-0"><strong class="pr-1">Student card number:</strong> {{ Auth::user()->card_num}}</p>
                                <p class="mb-0"><strong class="pr-1"></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-sm" style="border-color: #6c63ff">
                            <div class="card-header bg-transparent border-0">
                                <h3 class="mb-0" style="color: #6c63ff"><i class="far fa-clone  pr-1" style="color: #6c63ff"></i> General Information</h3>
                            </div>
                            <div class="card-body pt-0" >
                                <table class="table table-bordered"  >
                                    <tr>
                                        <th width="30%">Speciality</th>
                                        <td width="2%">:</td>
                                        <td>{{ Auth::user()->Speciality}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Education level	</th>
                                        <td width="2%">:</td>
                                        <td>{{ Auth::user()->education}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Email</th>
                                        <td width="2%">:</td>
                                        <td>{{ Auth::user()->email}}</td>
                                    </tr>

                                </table>
                                <a  class="btn-sm " href="{{ route('update-info-form') }}" title="edit">
                                    <i  class="fa-solid fa-gear" ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    </div>

@endsection



