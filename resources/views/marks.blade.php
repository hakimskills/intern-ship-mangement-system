@extends('layouts.app3')

@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profil</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>
            <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>
            <a class="nav-link1 nav-link-ltr1" href="/mark">interns finshed</a>
        </div>
    </ul>

    <div class="container mt-4">
        <div class="row">
            @if (count($employeeData) > 0)
                @foreach ($employeeData as $employee)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center" style="background-color: #6c63ff; color: white">
                                Company Name: {{ $employee['nameComp'] }}
                            </div>
                            <div class="card-body">
                                <p>Manager: {{ $employee['managerN'] }} {{ $employee['managerL'] }}</p>
                                <p> Theme: {{ $employee['post'] }}</p>
                                <p>
                                    Absence Count:
                                    <button type="button" class="btn " data-toggle="modal" data-target="#absenceDatesModal{{ $loop->index }}">
                                        {{ $employee['absenceCount'] }}
                                    </button>
                                </p>



                                @if ($employee['finalMark'] == null)
                                    <p>Final Mark: Still in progress</p>
                                @else
                                    <p>Final Mark: {{ $employee['finalMark'] }}</p>
                                @endif


                                </div>
                            @if ($employee['finalMark'] >= 10)
                                <div class="card-footer  text-body-secondary nav justify-content-center" style="background-color: #d7facd">
                                    <p>
                                        <a href="{{ route('create.pdf', $employee['id']) }}" style="text-decoration: none;color: black">Get Certificate</a>
                                    </p>
                                    @else
                                        <div class="card-footer nav justify-content-center  text-body-secondary" style="background-color: #ffc3b5 ">
                                            <p>you failed,no certificate</p>
                                            @endif
                            </div>

                        </div>

                    </div>


                    <div class="modal fade" id="absenceDatesModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="absenceDatesModalLabel{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="absenceDatesModalLabel{{ $loop->index }}">Absence Dates</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @foreach ($employee['absenceDates'] as $absenceDate)
                                        <p>{{ $absenceDate }}</p>
                                    @endforeach
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="custom-btn btn-5" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="nav justify-content-center">

                    <svg style="width:30rem;height: 30rem; margin-top: 2rem; margin-bottom: 2rem"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 817.02 802.93"><defs><style>.cls-1,.cls-5{fill:#fff;}.cls-2{fill:#6c63ff;}.cls-3{fill:#fefefe;}.cls-4,.cls-5{isolation:isolate;}.cls-5{font-size:63.14px;font-family:Roboto-Bold, Roboto;font-weight:700;}.cls-6{letter-spacing:-0.01em;}</style></defs><title>Asset 30_1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><rect class="cls-1" x="97.64" y="140.03" width="606.84" height="569.3" transform="translate(-66.78 774.43) rotate(-83.42)"/><rect class="cls-2" x="116.44" y="121.23" width="569.31" height="606.84"/><polygon class="cls-3" points="671.46 713.8 506.18 713.8 506.18 709.72 667.38 709.72 667.38 548.67 671.46 548.67 671.46 713.8"/><path class="cls-3" d="M457.61,713.8H433.33v-4.08h24.28Zm-121.4,0H287.64v-4.08h48.57Z"/><polygon class="cls-3" points="263.36 713.8 98.07 713.8 98.07 548.67 102.15 548.67 102.15 709.72 263.36 709.72 263.36 713.8"/><path class="cls-3" d="M102.16,492.56H98.08V464.48h4.08Zm0-140.33H98.08V296.08h4.08Z"/><polygon class="cls-3" points="102.15 268.01 98.07 268.01 98.07 102.89 263.36 102.89 263.36 106.96 102.15 106.96 102.15 268.01"/><path class="cls-3" d="M481.9,107H433.33v-4.07H481.9Zm-145.69,0H311.92v-4.07h24.29Z"/><polygon class="cls-3" points="671.46 268.01 667.38 268.01 667.38 106.96 506.18 106.96 506.18 102.89 671.46 102.89 671.46 268.01"/><path class="cls-3" d="M671.46,520.61h-4.08V464.48h4.08Zm0-168.4h-4.08V324.14h4.08Z"/><polygon class="cls-2" points="527.86 158.82 524.98 155.94 633.49 47.53 636.37 50.41 527.86 158.82"/><polygon class="cls-2" points="676.6 83.92 673.71 81.03 723.82 30.98 726.71 33.86 676.6 83.92"/><polygon class="cls-2" points="726.17 122.57 723.29 119.69 741.47 101.53 744.36 104.41 726.17 122.57"/><rect class="cls-2" x="752.7" y="25.46" width="73.68" height="4.08" transform="translate(211.99 566.54) rotate(-45.02)"/><rect class="cls-2" x="649.34" y="206.36" width="60.69" height="4.08" transform="translate(51.89 541.98) rotate(-45.03)"/><rect class="cls-2" x="69.53" y="594.3" width="100.29" height="4.08" transform="translate(-386.74 259.46) rotate(-45.02)"/><rect class="cls-2" x="-14.37" y="761.29" width="107.9" height="4.08" transform="translate(-528.34 251.76) rotate(-45.02)"/><polygon class="cls-2" points="105.14 770.77 102.26 767.89 121.09 749.08 123.97 751.96 105.14 770.77"/><polygon class="cls-2" points="170.4 762.35 167.52 759.47 204.53 722.5 207.41 725.38 170.4 762.35"/><rect class="cls-2" x="219.33" y="700.83" width="97.67" height="4.08" transform="translate(-418.62 395.85) rotate(-45.03)"/><rect class="cls-2" x="38.63" y="474" width="122.37" height="4.08" transform="translate(-307.51 210.22) rotate(-45.03)"/><polygon class="cls-2" points="654.83 387.14 651.95 384.25 719.93 316.33 722.82 319.21 654.83 387.14"/><g class="cls-4"><text class="cls-5" transform="translate(298.6 316.33)">OOPS!</text><text class="cls-5" transform="translate(191.72 503.09)"><tspan xml:space="preserve">          NO </tspan><tspan x="0" y="75.77" xml:space="preserve">    I</tspan><tspan class="cls-6" x="81.3" y="75.77">N</tspan><tspan x="124.98" y="75.77">TERNS :(</tspan></text></g></g></g></g></svg>
                </div>
                    @endif
        </div>
    </div>

    <h6 style="padding: 5px 10px; color: #6c63ff; font-weight: bold; border: 1px solid #6c63ff; border-radius: 20px;margin-left: 90px;margin-right: 90px">
        <span style="margin-left: 16rem">
            <span style="color: red;">MARK</span>: You can see absence dates when you click the number of absences
        </span>
    </h6>
@endsection
