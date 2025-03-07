@extends("layouts.app3")
@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card">
                        <div class="card-header text-center" style="background-color: #6c63ff; color: white">Update Manager Information</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('update-info-manager') }}">

                                            @csrf
                                            @method('PUT')

                                            <div class="form-group row p-2">
                                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                                </div>
                                            </div>

                                            <div class="form-group row p-2">
                                                <label for="last_name" class="col-md-3 col-form-label text-md-right">Last Name</label>
                                                <div class="col-md-6">
                                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required>
                                                </div>
                                            </div>






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


                                <div class="form-group row p-2">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="custom-btn btn-5 ms-4">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        </div>
                </div>
                {{-- js for spec and educ --}}



@endsection
