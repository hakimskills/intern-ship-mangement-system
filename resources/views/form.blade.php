


    @extends('layouts.app3')

@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>

        </div>
    </ul>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2> Stage request </h2>
        </div>
        <div class="card-body">
            <form name="employee" id="employee" method="post" action="{{url('store-form')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control"value="{{Auth::user()->name  ?? '' }}">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Last name</label>
                    <input type="text" id="name" name="last_name" class="@error('last_name') is-invalid @enderror form-control" value="{{ Auth::user()->last_name ?? ''  }}">
                    @error('last_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control"value="{{ Auth::user()->email ?? ''  }}">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">date birth</label>
                    <input type="text" id="birth" name="birth" class="@error('birth') is-invalid @enderror form-control">
                    @error('birth')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">education level</label>
                    <input type="text" id="education" name="education" class="@error('education') is-invalid @enderror form-control">
                    @error('education')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Speciality</label>
                    <input type="text" id="Speciality" name="Speciality" class="@error('Speciality') is-invalid @enderror form-control">
                    @error('Speciality')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">post</label>
                    <input type="text" id="sector" name="sector" class="@error('sector') is-invalid @enderror form-control">
                    @error('sector')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">date start</label>
                    <input type="text" id="dateS" name="dateS" class="@error('dateS') is-invalid @enderror form-control">
                    @error('dateS')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">date ends</label>
                    <input type="text" id="dateE" name="dateE" class="@error('dateE') is-invalid @enderror form-control">
                    @error('dateE')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">College year</label>
                    <input type="text" id="College_year" name="College_year" class="@error('College_year') is-invalid @enderror form-control">
                    @error('College_year')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary ms-auto">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection




