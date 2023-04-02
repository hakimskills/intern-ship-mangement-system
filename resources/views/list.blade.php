@extends('layouts.app3')

@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/admin/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/list">list of requests</a>


        </div>
    </ul>




    <table class="table ms-4 table-bordered" >
        <thead>
        <tr class="table-dark">
            <th scope="col">First Name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
        <tr>

            <td>{{ $employee->name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
            <td class="bor"><button type="button" class="btn btn-outline-dark">view</button></td>
            @endforeach
        </tr>

        </tbody>
    </table>


@endsection
