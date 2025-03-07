@extends('layouts.app3')
@section('content')
<div class="container">
        <div class="ms-3">
    <form action="{{ route('rate.employee.submit', $employee->id) }}" method="POST">
        @csrf
    <div class="nav justify-content-center">
        <h2 style="color: #6c63ff;font-weight: bold">Internship Performance Evaluation Form</h2>
    </div>


    <div  class="formbold-input-flex">
        <div>
            <input style="background-color: #f8fafc"

                   name="general_discipline"
                   id="email"
                   type="number"
                   min="0" max="4"
                   class="formbold-form-input"
                   required
            />
            <label for="email" class="formbold-form-label"> General Discipline: </label>
        </div>
    </div>
    <div  class="formbold-input-flex">
        <div>
            <input style="background-color: #f8fafc"

                   name="work_skills"
                   id="email"
                   type="number"
                   min="0" max="4"
                   class="formbold-form-input"
                   required
            />
            <label for="email" class="formbold-form-label"> Work Skills: </label>
        </div>
    </div>
    <div  class="formbold-input-flex">
        <div>
            <input style="background-color: #f8fafc"

                   name="initiative"
                   id="email"
                   type="number"
                   min="0" max="4"
                   class="formbold-form-input"
                   required
            />
            <label for="email" class="formbold-form-label"> Initiative/Entrepreneurship: </label>
        </div>
    </div>

    <div  class="formbold-input-flex">
        <div>
            <input style="background-color: #f8fafc"

                   name="imagination"
                   id="email"
                   type="number"
                   min="0" max="4"
                   class="formbold-form-input"
                   required
            />
            <label for="email" class="formbold-form-label"> Imagination and Innovation Abilities: </label>
        </div>
    </div>
    <div  class="formbold-input-flex">
        <div>
            <input style="background-color: #f8fafc"

                   name="knowledge"
                   id="email"
                   type="number"
                   min="0" max="4"
                   class="formbold-form-input"
                   required
            />
            <label for="email" class="formbold-form-label"> Knowledge Acquired in the Internship Field: </label>
        </div>
    </div>
    <button type="submit" style="margin:1rem auto" class="custom-btn btn-5">Submit</button>
    </form>
    </div>
</div>
@endsection
