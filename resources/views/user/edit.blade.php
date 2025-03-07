@extends('layouts.app3')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"style="color: white;background-color: #6c63ff"> Edit request </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control"value="{{$employee->name}} "disabled>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Last name</label>
                                <input type="text" id="name" name="last_name" class="@error('last_name') is-invalid @enderror form-control" value="{{$employee->last_name}}"disabled>
                                @error('last_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control"value="{{$employee->email}}"disabled>
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">student card number</label>
                                <input type="number" id="card_num" name="card_num" class="@error('card_num') is-invalid @enderror form-control" value="{{$employee->card_num}}">
                                @error('card_num')
                                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">social number</label>
                                <input type="number" id="social_num" name="social_num" class="@error('social_num') is-invalid @enderror form-control" value="{{$employee->social_num}}">
                                @error('social_num')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">education level</label>
                                <input type="text" id="education" name="education" class="@error('education') is-invalid @enderror form-control"value="{{$employee->education}}">
                                @error('education')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speciality</label>
                                <input type="text" id="Speciality" name="Speciality" class="@error('Speciality') is-invalid @enderror form-control" value="{{$employee->Speciality}}">
                                @error('Speciality')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row p-3">
                                <!-- Card 1 -->
                                <div class="col-6 mb-2">
                                    <div class="card pax-details">
                                        <div class="card-header card-header-primary d-flex justify-content-between">
                                            <span>Select company</span>
                                            <span>

                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                                        </div>
                                        <div id='card_body_1' class="card-body card-body-secondary collapse show">
                                            <label for="nameComp">Company Name</label>
                                            <select name="nameComp" id="nameComp" class="form-control">
                                                <option value="{{ $employee->nameComp }}">{{ $employee->nameComp }}</option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->comp_name }}">{{ $company->comp_name  }}</option>

                                                @endforeach
                                            </select>
                                            @error('nameComp')
                                            <div class="alert alert-danger mt-1 mb-1">name company is required</div>
                                            @enderror

                                            <div class="form-group form-row">
                                                <label for="managerList">Manager email</label>
                                                <select name="manager_email" id="managerList" class="form-control">
                                                    <option value="{{$employee->manager_email}}" selected disabled hidden>{{$employee->manager_email}}</option>
                                                </select>
                                            </div>




                                        </div>

                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-6 mb-2">
                                    <div class="card pax-details">
                                        <div class="card-header card-header-primary d-flex justify-content-between">
                                            <span>Add company</span>
                                            <span>

                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                                        </div>
                                        <div id='card_body_2' class="card-body card-body-secondary collapse show">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">comapny name</label>
                                                <input type="text" id="nameComp2" name="nameComp" class="@error('nameComp') is-invalid @enderror form-control" value="{{$employee->nameComp}}">
                                                @error('nameComp')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group form-row">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">manager email</label>
                                                    <input type="text" id="manager_email" name="manager_email" class="@error('manager_email') is-invalid @enderror form-control" value="{{$employee->manager_email}}">
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
                                <label for="exampleInputEmail1">post</label>
                                <input type="text" id="post" name="post" class="@error('post') is-invalid @enderror form-control" value="{{$employee->post}}">
                                @error('post')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">date start</label>
                                <input type="date" id="dateS" name="dateS" class="@error('dateS') is-invalid @enderror form-control" value="{{$employee->dateS}}">
                                @error('dateS')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">date ends</label>
                                <input type="date" id="dateE" name="dateE" class="@error('dateE') is-invalid @enderror form-control" value="{{$employee->dateE}}">
                                @error('dateE')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">College year</label>
                                <input type="text" id="College_year" name="College_year" class="@error('College_year') is-invalid @enderror form-control" value="{{$employee->College_year}}">
                                @error('College_year')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row justify-content-center p-2">
                                <div class="col-md-6 offset-md-4">
                                    <button class="custom-btn btn-5"><span>save</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
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
@endsection
