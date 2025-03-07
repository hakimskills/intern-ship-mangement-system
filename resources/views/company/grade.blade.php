@extends('layouts.app3')

@section('content')

    <div class="container">
        <div class="nav justify-content-center">
            <h1 style="color: #6c63ff;font-weight: bold">Manage intern: {{ $employee->name }} {{ $employee->last_name }}</h1>
        </div>
        <form action="{{ route('manage.employee.submit', $employee->id) }}" method="POST">
            @csrf
            <div class="nav justify-content-center"></div>
            <div class="form-group">
                <label for="attendance" style="font-weight: bold">Mark Absence:</label>
                <table class="table">
                    <tr>
                        <td>
                            <div class="form-check">
                                <input  id="cb1" class="form-check-input" type="checkbox" name="attendance[]" value="{{ date('Y-m-d') }}" onclick="confirmCheckbox(this)">
                                <label class="form-check-label">{{ date('Y-m-d') }}</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <script>
                function confirmCheckbox(checkbox) {
                    Swal.fire({
                        title: 'Mark Absence',
                        text: 'Are you sure you want to mark this absence?',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No',
                        reverseButtons: true,
                        customClass: {
                            confirmButton: 'custom-btn btn-5 conf ',
                            cancelButton: 'custom-btn btn-5 conf1'
                        },
                        buttonsStyling: false // Disable default styling
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Mark the absence
                        } else {
                            checkbox.checked = false; // Uncheck the checkbox
                        }
                    });
                }
            </script>



            <button type="submit" style="margin:1rem auto" class="custom-btn btn-5">Submit</button>
        </form>
    </div>
@endsection








