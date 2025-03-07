@extends('layouts.app3')
@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/company/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>
            <a class="nav-link1 nav-link-ltr1" href="/internship">list of interns</a>
        </div>
    </ul>
    <div class="student-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm" style="border-color: #6c63ff">
                        <div class="card-header bg-transparent text-center">
                            @foreach ($companies as $company)
                                @if ($company->logo)
                                    <img class="company-logo" style="height: 90px;width: 90px" src="{{ asset('storage/' . $company->logo) }} " alt="Company Logo">
                                @else

                                    @if ($company->id === Auth::user()->company_id)
                                        <p>Upload a photo:</p>
                                        <form action="{{ route('upload-logo') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" style="color: #6c63ff;margin-left:50px" name="logo" accept="image/*">
                                            <button type="submit" class="btn" style="background-color: #6c63ff;color: white;margin-top: 10px">Upload</button>
                                        </form>
                                    @endif
                                @endif

                        </div>



                        <div class="card-body nav justify-content-center" style="border-color: #6c63ff">
                            <p class="mb-0" style="font-weight: bold">{{ Auth::user()->name}} {{ Auth::user()->last_name}}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow-sm" style="border-color: #6c63ff">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0" style="color: #6c63ff"><i class="far fa-clone  pr-1" style="color: #6c63ff"></i> General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Company name</th>
                                    <td width="2%">:</td>
                                    <td>{{ $company->comp_name}}</td>
                                </tr>
                                <tr>
                                    <th width="30%">address</th>
                                    <td width="2%">:</td>
                                    <td>{{ $company->address}}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Phone number of company</th>
                                    <td width="2%">:</td>
                                    <td>{{$company->phone_num}}</td>
                                </tr>
                            </table>
                            <a class="btn-sm" href="{{ route('update-info-Manager') }}" title="Edit">
                                <i class="fa-solid fa-gear"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
