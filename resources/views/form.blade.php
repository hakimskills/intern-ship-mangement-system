


@extends('layouts.app3')

@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>
            <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>
            <a class="nav-link1 nav-link-ltr1" href="/mark">interns finished</a>

        </div>
    </ul>
    <style>
        /* Apply hover effect to inputs */
        input:hover {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        /* Apply hover effect to select */
        select:hover {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        /* Apply hover effect to textarea */
        textarea:hover {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }
    </style>
    <i class="fa-solid fa-chevrons-left"></i>

    <div class="container mt-4 justify-content-center">
        @if(session('error'))
            <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h5 class="modal-title" id="errorModalLabel">Error</h5>
                        </div>
                        <div class="modal-body text-center">
                            <div class="circle">
                                <i class="fas fa-times"></i>
                            </div>
                            <p class="mt-3">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                errorModal.show();
                setTimeout(function() {
                    errorModal.hide();
                }, 3500);
            </script>
        @endif
        @if(session('status'))

            <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <h5 class="modal-title" id="statusModalLabel">request sent</h5>
                        </div>
                        <div class="modal-body text-center">
                            <div class="circle">
                                <i class="fas fa-check"></i>
                            </div>
                            <p class="mt-3">{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Script to automatically show and hide the modal -->
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('statusModal'));
                myModal.show();

                setTimeout(function() {
                    myModal.hide();
                }, 3500);
            </script>
        @endif
    </div>

    <div class="nav justify-content-center">
            <div class="card w-75" style="border-color: #6c63ff;">
                <div class="card-header text-center font-weight-bold" style="background-color: #6c63ff; color: white;">
                    <h4>INTERNSHIP REQUEST</h4>
                </div>
                <div class="card-body" style="background-color: white;">
                    <form name="employee" id="employee" method="post" action="{{url('store-form')}}">
                        {{ csrf_field() }}

                        <div class="row p-3">
                            <!-- Card 1 -->
                            <div class="col-6 mb-2">
                                <div class="card pax-details" style="border-color: #6c63ff;">
                                    <div class="card-header card-header-primary d-flex justify-content-between" style="border-color: #6c63ff;">
                                        <span>Select company</span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div id="card_body_1" class="card-body card-body-secondary collapse show">
                                        <label for="nameComp">Company Name</label>
                                        <select name="nameComp" id="nameComp" class="form-control">
                                            @foreach ($companies as $company)
                                                @if ($loop->first)
                                                    <option value="" selected disabled hidden>Select a company</option>
                                                @endif
                                                <option value="{{ $company->comp_name }}">{{ $company->comp_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('nameComp')
                                        <div class="alert alert-danger mt-1 mb-1">name company is required</div>
                                        @enderror

                                        <div class="form-group form-row">
                                            <label for="managerList">Manager email</label>
                                            <select name="manager_email" id="managerList" class="form-control">
                                                <option value="" selected disabled hidden>Select a manager</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-6 mb-2">
                                <div class="card pax-details" style="border-color: #6c63ff;">
                                    <div class="card-header card-header-primary d-flex justify-content-between" style="border-color: #6c63ff;">
                                        <span>Add company</span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div id="card_body_2" class="card-body card-body-secondary collapse show">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">company name</label>
                                            <input type="text" id="nameComp2" name="nameComp" class="@error('nameComp') is-invalid @enderror form-control">
                                            @error('nameComp')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group form-row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">manager email</label>
                                                <input type="text" id="manager_email" name="manager_email" class="@error('manager_email') is-invalid @enderror form-control">
                                                @error('manager_email')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Theme</label>
                            <input type="text" id="post" name="post" class="@error('post') is-invalid @enderror form-control">
                            @error('post')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Start</label>
                            <input type="date" id="dateS" name="dateS" class="@error('dateS') is-invalid @enderror form-control" onchange="validateDates()">
                            @error('dateS')
                            <div class="alert alert-danger mt-1 mb-1">Date start is required</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Ends</label>
                            <input type="date" id="dateE" name="dateE" class="@error('dateE') is-invalid @enderror form-control" onchange="validateDates()">
                            @error('dateE')
                            <div class="alert alert-danger mt-1 mb-1">Date ends required</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">College year</label>
                            <input type="text" id="College_year" name="College_year" class="@error('College_year') is-invalid @enderror form-control" readonly>
                            @error('College_year')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row justify-content-center p-2">
                            <div class="col-md-6 offset-md-4">
                                <button class="custom-btn btn-5"><span>send</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const nameCompDropdown = document.getElementById('nameComp');
        const managerListDropdown = document.getElementById('managerList');

        nameCompDropdown.addEventListener('change', () => {
            const companyId = nameCompDropdown.value;
            managerListDropdown.innerHTML = '<option value="" selected disabled hidden>Loading...</option>';

            fetch(`/get-managers/${companyId}`)
                .then(response => response.json())
                .then(managers => {
                    managerListDropdown.innerHTML = '<option value="" selected disabled hidden>Select a manager</option>';

                    managers.forEach(manager => {
                        const option = document.createElement('option');
                        option.value = manager.email;
                        option.text = `${manager.email}` ;

                        managerListDropdown.appendChild(option);
                    });
                });
        });
    </script>
    <script>
        const nameComp = document.getElementById('nameComp');
        const nameComp2 = document.getElementById('nameComp2');
        const card1 = document.getElementById('card_body_1');
        const card2 = document.getElementById('card_body_2');

        nameComp.addEventListener('change', () => {
            if (nameComp.value) {
                card2.remove();
                nameComp2.required = false;
            } else {
                card2.style.display = 'block';
                nameComp2.required = true;
            }
        });

        nameComp2.addEventListener('input', () => {
            if (nameComp2.value) {
                card1.remove();
                nameComp.required = false;
            } else {
                card1.style.display = 'block';
                nameComp.required = true;
            }
        });
    </script>
    <script>
        const educationSelect = document.getElementById('education');
        const specialitySelect = document.getElementById('Speciality');

        educationSelect.addEventListener('change', () => {
            if (educationSelect.value === 'L1' || educationSelect.value === 'L2') {
                specialitySelect.innerHTML = '<option value="/">/</option>';
            } else {
                specialitySelect.innerHTML = '<option value="" selected disabled hidden>Select the Speciality</option><option value="Ti">Ti</option><option value="Si">Si</option><option value="Gl">Gl</option><option value="Sti">Sti</option>';
            }
        });
    </script>


@endsection




