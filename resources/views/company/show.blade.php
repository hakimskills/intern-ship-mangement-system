@extends('layouts.app3')
@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/company/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>




        </div>
    </ul>
    <div class="nav justify-content-center">
        <div class="card border-dark" style="width: 40rem;">
            <div class="card-header text-center fs-3 fw-bold" style="color: white;background-color: #6c63ff">Request Information</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="fw-bold">Name:</span> {{ $employee->name }}</li>
                    <li class="list-group-item"><span class="fw-bold">Last Name:</span> {{ $employee->last_name }}</li>
                    <li class="list-group-item"><span class="fw-bold">Email:</span> {{ $employee->email }}</li>
                    <li class="list-group-item"><span class="fw-bold">Student Card Number:</span> {{ $employee->card_num }}</li>
                    <li class="list-group-item"><span class="fw-bold">Social Number:</span> {{ $employee->social_num }}</li>
                    <li class="list-group-item"><span class="fw-bold">Speciality:</span> {{ $employee->Speciality }}</li>
                    <li class="list-group-item"><span class="fw-bold">Education Level:</span> {{ $employee->education }}</li>
                    <li class="list-group-item"><span class="fw-bold">College Year:</span> {{ $employee->College_year }}</li>

                    <li class="list-group-item"><span class="fw-bold">Post:</span> {{ $employee->post }}</li>
                    <li class="list-group-item"><span class="fw-bold">Date Start:</span> {{ $employee->dateS }}</li>
                    <li class="list-group-item"><span class="fw-bold">Date End:</span> {{ $employee->dateE }}</li>
                </ul>
            </div>
            <div class="card-footer bg-transparent border-dark justify-content-center d-flex">
                <div class="col-md-9 ms-auto d-flex">
                    <form action="{{ route('acceptByManager', $employee->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-success ms-5"><i class="fa-solid fa-check me-2"></i>Accept</button>
                    </form>
                    <form action="{{ route('refuseByManager', $employee->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger ms-5"><i class="fa-solid fa-xmark me-2"></i>Refuse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







@endsection
