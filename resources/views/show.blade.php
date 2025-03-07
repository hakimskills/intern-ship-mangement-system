    @extends('layouts.app3')
    @section('content')
        <ul class="nav justify-content-center">
            <div class="navbar1 justify-content-center">
                <a class="nav-link1 nav-link-ltr1" href="/admin/home">profile</a>

                <a class="nav-link1 nav-link-ltr1" href="/list">list of requests</a>


            </div>

        </ul>
        <div class="nav justify-content-center">
            <div class="card border-dark" style="width: 40rem;">
                <div class="card-header text-center fs-3 fw-bold"style="color: white; background-color: #6c63ff">Student information</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="fw-bold">Name:</span> {{ $employee->name }}</li>
                        <li class="list-group-item"><span class="fw-bold">Last Name:</span> {{ $employee->last_name }}</li>
                        <li class="list-group-item"><span class="fw-bold">Email:</span> {{ $employee->email }}</li>
                        <li class="list-group-item"><span class="fw-bold">Student Card Number:</span> {{ $employee->card_num }}</li>
                        <li class="list-group-item"><span class="fw-bold">Social Number:</span> {{ $employee->social_num }}</li>
                        <li class="list-group-item"><span class="fw-bold">Speciality:</span> {{ $employee->Speciality }}</li>
                        <li class="list-group-item"><span class="fw-bold">Education Level:</span> {{ $employee->education }}</li>
                        <li class="list-group-item"><span class="fw-bold">College Year:</span> {{ $employee->College_year }}</li>
                        <li class="list-group-item"><span class="fw-bold">Manager email :</span> {{ $employee->manager_email }}</li>
                        <li class="list-group-item"><span class="fw-bold">Company Name:</span> {{ $employee->nameComp }}</li>
                        <li class="list-group-item"><span class="fw-bold">Post:</span> {{ $employee->post }}</li>
                        <li class="list-group-item"><span class="fw-bold">Date Start:</span> {{ $employee->dateS }}</li>
                        <li class="list-group-item"><span class="fw-bold">Date End:</span> {{ $employee->dateE }}</li>
                    </ul>
                </div>
                @if($employee->manager_validation==0 ||$employee->manager_validation==0 )
                <div class="card-footer bg-transparent border-dark justify-content-center d-flex">
                    <div class="col-md-9 ms-auto d-flex">
        @if($employee->accepted!=1)
       <form action="{{ route('acceptEmployee', ['id' => $employee->id, 'email' => $employee->manager_email,'comp_name'=>$employee->nameComp]) }}" method="post">
           @csrf
           <button type="submit" class="btn btn-outline-success ms-5"><i class="fa-solid fa-check me-2"></i>Accept</button>

       </form>
                        @endif
            @if($employee->accepted!=2)
                <form action="{{ route('refuseEmployee', $employee->id) }}" method="post">
                    @csrf
                    <button type="button" class="btn btn-outline-danger ms-5" data-bs-toggle="modal" data-bs-target="#refusalModal{{ $employee->id }}">
                        <i class="fa-solid fa-xmark me-2"></i>Refuse
                    </button>

                    <!-- Refusal Reason Modal -->
                    <div class="modal fade" id="refusalModal{{ $employee->id }}" tabindex="-1" aria-labelledby="refusalModalLabel{{ $employee->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="refusalModalLabel{{ $employee->id }}">Enter Reason for Refusal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="refusal_reason{{ $employee->id }}" class="form-label">Reason:</label>
                                        <textarea class="form-control" id="refusal_reason{{ $employee->id }}" name="refusal_reason" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Refuse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            @endif
   </div>
</div>
@endif
</div>
</div>







@endsection
