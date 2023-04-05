@extends('layouts.app3')
@section('content')

    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profil</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>
            <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>


        </div>

    </ul>
    @if($employees->count()==0 )
        <h3 class="text-center p-5"> no requests yet</h3>
    @else



        <table class="table  ms-3 table-striped-columns" >
            <thead>
            <tr class="table-dark">
                <th scope="col">#</th>

                <th scope="col">First Name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">State</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    @if($employee->accepted==0) <td>Not consulted <i class="fa-solid fa-question" style="color: #5c5c5c;"></i></td>
                    <td ><a href="{{ route('employees.show',$employee->id) }}" class="btn-danger btn-sm"title="edit"> <i class="fa-solid fa-wrench fa-xl ms-4" style="color: #4b1f51; "></i></a></td>
                    @endif
                    @if($employee->accepted==1) <td>Accepted <i class="fa-solid fa-check" style="color: #17750a;"></i></td> <td></td>
                    @endif
                    @if($employee->accepted==2) <td>Refused <i class="fa-solid fa-xmark" style="color: #cf0707;"></i></td>
                    @endif

                    @endforeach
                </tr>

            </tbody>
        </table>
    @endif
@endsection
