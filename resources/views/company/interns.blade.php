@extends('layouts.app3')
@section('content')

    @php
        $user = Auth::user();
        $email = null;
        $email = $email ?? [];

        $emailCount = 0;
        $email = App\Models\Employee::whereIn('manager_email', [Auth::user()->email])->get();
        $emailCount = $email->count();
    @endphp
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/company/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>

            <a class="nav-link1 nav-link-ltr1" href="/internship">list of interns</a>

        </div>
    </ul>
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

        <div class="container mt-4 justify-content-center">
            @if(session('success'))
                <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <h5 class="modal-title" id="statusModalLabel">Success</h5>
                            </div>
                            <div class="modal-body text-center">
                                <div class="circle">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p class="mt-3">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script to automatically show and hide the modal -->
                <script>
                    var statusModal = new bootstrap.Modal(document.getElementById('statusModal'));
                    statusModal.show();

                    setTimeout(function() {
                        statusModal.hide();
                    }, 3500);
                </script>
            @endif
        </div>
    </div>

    @if($employees->count() == 0 || $emailCount == 0)
        <div class="nav justify-content-center">
        <svg style="width:30rem;height: 30rem; margin-top: 2rem; "  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 817.02 802.93"><defs><style>.cls-1,.cls-5{fill:#fff;}.cls-2{fill:#6c63ff;}.cls-3{fill:#fefefe;}.cls-4,.cls-5{isolation:isolate;}.cls-5{font-size:63.14px;font-family:Roboto-Bold, Roboto;font-weight:700;}.cls-6{letter-spacing:-0.01em;}</style></defs><title>Asset 30_1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><rect class="cls-1" x="97.64" y="140.03" width="606.84" height="569.3" transform="translate(-66.78 774.43) rotate(-83.42)"/><rect class="cls-2" x="116.44" y="121.23" width="569.31" height="606.84"/><polygon class="cls-3" points="671.46 713.8 506.18 713.8 506.18 709.72 667.38 709.72 667.38 548.67 671.46 548.67 671.46 713.8"/><path class="cls-3" d="M457.61,713.8H433.33v-4.08h24.28Zm-121.4,0H287.64v-4.08h48.57Z"/><polygon class="cls-3" points="263.36 713.8 98.07 713.8 98.07 548.67 102.15 548.67 102.15 709.72 263.36 709.72 263.36 713.8"/><path class="cls-3" d="M102.16,492.56H98.08V464.48h4.08Zm0-140.33H98.08V296.08h4.08Z"/><polygon class="cls-3" points="102.15 268.01 98.07 268.01 98.07 102.89 263.36 102.89 263.36 106.96 102.15 106.96 102.15 268.01"/><path class="cls-3" d="M481.9,107H433.33v-4.07H481.9Zm-145.69,0H311.92v-4.07h24.29Z"/><polygon class="cls-3" points="671.46 268.01 667.38 268.01 667.38 106.96 506.18 106.96 506.18 102.89 671.46 102.89 671.46 268.01"/><path class="cls-3" d="M671.46,520.61h-4.08V464.48h4.08Zm0-168.4h-4.08V324.14h4.08Z"/><polygon class="cls-2" points="527.86 158.82 524.98 155.94 633.49 47.53 636.37 50.41 527.86 158.82"/><polygon class="cls-2" points="676.6 83.92 673.71 81.03 723.82 30.98 726.71 33.86 676.6 83.92"/><polygon class="cls-2" points="726.17 122.57 723.29 119.69 741.47 101.53 744.36 104.41 726.17 122.57"/><rect class="cls-2" x="752.7" y="25.46" width="73.68" height="4.08" transform="translate(211.99 566.54) rotate(-45.02)"/><rect class="cls-2" x="649.34" y="206.36" width="60.69" height="4.08" transform="translate(51.89 541.98) rotate(-45.03)"/><rect class="cls-2" x="69.53" y="594.3" width="100.29" height="4.08" transform="translate(-386.74 259.46) rotate(-45.02)"/><rect class="cls-2" x="-14.37" y="761.29" width="107.9" height="4.08" transform="translate(-528.34 251.76) rotate(-45.02)"/><polygon class="cls-2" points="105.14 770.77 102.26 767.89 121.09 749.08 123.97 751.96 105.14 770.77"/><polygon class="cls-2" points="170.4 762.35 167.52 759.47 204.53 722.5 207.41 725.38 170.4 762.35"/><rect class="cls-2" x="219.33" y="700.83" width="97.67" height="4.08" transform="translate(-418.62 395.85) rotate(-45.03)"/><rect class="cls-2" x="38.63" y="474" width="122.37" height="4.08" transform="translate(-307.51 210.22) rotate(-45.03)"/><polygon class="cls-2" points="654.83 387.14 651.95 384.25 719.93 316.33 722.82 319.21 654.83 387.14"/><g class="cls-4"><text class="cls-5" transform="translate(298.6 316.33)">OOPS!</text><text class="cls-5" transform="translate(191.72 503.09)"><tspan xml:space="preserve">          NO </tspan><tspan x="0" y="75.77" xml:space="preserve">    I</tspan><tspan class="cls-6" x="81.3" y="75.77">N</tspan><tspan x="124.98" y="75.77">TERNS :(</tspan></text></g></g></g></g></svg>
        </div>
            @else
        <table class="table ms-3 table-striped-columns" style="width: 90%">
            <thead>
            <tr class="table" style="background-color: #6c63ff">
                <th scope="col" style="color: white">First Name</th>
                <th scope="col" style="color: white">Last Name</th>
                <th scope="col" style="color: white">Date Starts</th>
                <th scope="col" style="color: white">Date Ends</th>
                <th scope="col" style="color: white">Absence</th>
                <th scope="col" style="color: white">Grade</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                @if($employee->manager_email == Auth::user()->email)
                    <tr>
                        <td data-label="Name">{{ $employee->name }}</td>
                        <td data-label="Last Name">{{ $employee->last_name }}</td>
                        <td data-label="Date Starts">{{ $employee->dateS }}</td>
                        <td data-label="Date Ends">{{ $employee->dateE }}</td>

                        @php
                            $currentDate = date('Y-m-d');
                            $rated = $currentDate >= $employee->dateS && $currentDate <= $employee->dateE;
                            $nextDay = date('Y-m-d', strtotime($employee->dateE . ' +1 day'));
                        @endphp
                        @if($employee->rated)
                            <td data-label="View">Done <i class="fa-solid fa-check" style="color: #17750a;width: 5%"></i></td>

                            <td data-label="View">Done <i class="fa-solid fa-check" style="color: #17750a;width: 5%"></i></td>

                        @elseif($currentDate <= $employee->dateE)
                            <td data-label="View">Add <a href="{{ route('interns.grade', $employee->id) }}"><i class="fa-solid fa-plus" style="color: #6c63ff;"></i></a></td>
                        @else
                            <td data-label="View">Done <i class="fa-solid fa-check" style="color: #17750a;width: 5%"></i></td>

                            <td data-label="View"><a style="text-decoration: #6c63ff;color: #6c63ff" href="{{route('rate.grade',$employee->id)}}">Grade  <i class="fa-solid fa-graduation-cap" style="color: #6c63ff"></i> </a></td>

                        @endif
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
