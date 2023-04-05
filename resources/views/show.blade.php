@extends('layouts.app3')
@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/admin/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/list">list of requests</a>


        </div>

    </ul>
    <div class=" nav justify-content-center">

        <div class="card border-dark " style="width:40rem; position: center;">
            <div class="card-header text-center fs-3 fw-bold ">Information</div>
            <div class="card-body ms-5 ">
                <p class="card-text fw-bolder "> Name: {{ $employee->name }} </p>
                <p class="card-text fw-bolder"> Last name: {{ $employee->last_name }}</p>
                <p class="card-text  fw-bolder"> Email: {{ $employee->email }}</p>
                <p class="card-text fw-bolder"> Date brith: {{ $employee->birth }}</p>

                <p class="card-text fw-bolder"> Speciality: {{ $employee->Speciality }}</p>
                <p class="card-text fw-bolder"> Education level: {{ $employee->education }}</p>
                <p class="card-text fw-bolder"> College year: {{ $employee->College_year }}</p>
                <p class="card-text fw-bolder"> Post: {{ $employee->post }}</p>
                <p class="card-text fw-bolder"> Date end: {{ $employee->dateE }}</p>
                <p class="card-text fw-bolder"> Date start: {{ $employee->dateS }}</p>

            </div>
            <div class="card-footer bg-transparent border-dark justify-content-center d-inline">
                <div class="col-md-9 ms-auto d-flex">
                    <form action="{{ route('acceptEmployee', $employee->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-success ms-5">
                            Accept <i class="fa-solid fa-check "></i>
                        </button>
                    </form>

                    <form action="{{ route('refuseEmployee', $employee->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger ms-5">
                            Refuse <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
