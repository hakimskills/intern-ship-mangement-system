@extends("layouts.app3")
@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                @if(Auth::user()->first_login==1)
                <h2 style="color: #6c63ff;margin-left: 5rem"> Please enter your personal information</h2>
                @endif
                <div class="card">
                    <div class="card-header text-center" style="background-color: #6c63ff;color: white">Update Student Information</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update-info') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row p-2">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row p-2" >
                                <label for="last_name" class="col-md-3 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required>
                                </div>
                            </div>

                            <div class="form-group row p-2">
                                <label for="card_num" class="col-md-3 col-form-label text-md-right">Card Number</label>
                                <div class="col-md-6">
                                    <input id="card_num" type="number" class="form-control" name="card_num" value="{{ Auth::user()->card_num }}">
                                </div>
                            </div>

                            <div class="form-group row p-2">
                                <label for="social_num" class="col-md-3 col-form-label text-md-right">Social Number</label>
                                <div class="col-md-6">
                                    <input id="social_num" type="number" class="form-control" name="social_num" value="{{ Auth::user()->social_num }}">
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label for="exampleInputEmail1"  class="col-md-3 col-form-label text-md-right">Education level</label>
                                <div class="col-md-6">
                                <select name="education" id="education" class="form-control">

                                    <option value="{{ Auth::user()->education }}" >{{ Auth::user()->education }}</option>


                                    <option value="L1">L1</option>
                                    <option value="L2">L2</option>
                                    <option value="L3">L3</option>

                                </select>
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label for="exampleInputEmail1"  class="col-md-3 col-form-label text-md-right">Speciality</label>
                                <div class="col-md-6">
                                <select name="Speciality" id="Speciality" class="form-control">

                                    <option value="{{ Auth::user()->Speciality }}" >{{ Auth::user()->Speciality }}</option>


                                    <option value="Ti">Ti</option>
                                    <option value="Si">Si</option>
                                    <option value="Gl">Gl</option>
                                    <option value="Sti">Sti</option>

                                </select>
                                </div>
                            </div>
                            @if(Auth::user()->first_login!=1)
                            <div class="form-group row p-2">
                                <label for="old_password" class="col-md-3 col-form-label text-md-right">Old Password</label>
                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control" name="old_password" required>
                                    @if ($errors->has('old_password'))
                                        <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row p-2">
                                <label for="password" class="col-md-3 col-form-label text-md-right">New Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>
                            @endif


                            <div class="form-group row p-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="custom-btn btn-5 ms-4" >save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- js for spec and educ --}}
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
