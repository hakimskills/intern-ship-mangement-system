@extends('layouts.app3')

@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/admin/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/list">list of requests</a>
        </div>
    </ul>



        @php
            $filteredEmployees = $employees->filter(function($employee) {
                return ((Auth::user()->id_dep == 1 && $employee->Speciality == 'Ti') ||
                    (Auth::user()->id_dep == 2 && $employee->Speciality == 'Gl') ||
                    (Auth::user()->id_dep == 3 && in_array($employee->education, ['L1', 'L2'])));
            });
        @endphp

        @if($filteredEmployees->count() > 0)
            <div class="table table-bordered" style="width: 96%; border-radius: 6px">
                <table class="table ms-3 table-striped-columns" STYLE="width: 90%">
                    <thead>
                    <tr class="table" style="background-color: #6c63ff;">
                        <th scope="col" style="color: white">First Name</th>
                        <th scope="col" style="color: white">Last Name</th>
                        <th scope="col" style="color: white">Email</th>
                        <th scope="col" style="color: white">State</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($filteredEmployees as $employee)
                        <tr>
                            <td data-label="Name">{{ $employee->name }}</td>
                            <td data-label="Last Name">{{ $employee->last_name }}</td>
                            <td data-label="Email">{{ $employee->email }}</td>
                            @if($employee->accepted==0)
                                <td data-label="State">Not consulted <i class="fa-solid fa-question" style="color: #5c5c5c;width: 5%"></i></td>
                            @endif
                            @if($employee->accepted==1)
                                <td data-label="State">Accepted <i class="fa-solid fa-check" style="color: #17750a;width: 5%"></i></td>
                            @endif
                            @if($employee->accepted==2)
                                <td data-label="State">Refused <i class="fa-solid fa-xmark" style="color: #cf0707;width: 5%"></i></td>
                            @endif
                            @if($employee->accepted==0)
                                <td data-label="View"><a href="{{ route('employees.show', $employee->id) }}" class="btn-danger btn-sm"> <i class="fa-solid fa-eye" style="color: #6c63ff;"></i></a></td>
                            @endif
                            @if($employee->accepted==2 || $employee->accepted==1 )
                                <td data-label="Edit"><a href="{{ route('employees.show', $employee->id) }}" title="Edit"> <i class="fa-solid fa-pen-to-square" style="color: #6c63ff;"></i></a></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="nav justify-content-center">
                <svg style="width:30rem;height: 30rem; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 918.03 902.2"><defs><style>.cls-1,.cls-5,.cls-6{fill:#fff;}.cls-2{fill:#6c63ff;}.cls-3{fill:#fefefe;}.cls-4,.cls-5,.cls-6{isolation:isolate;}.cls-5{font-size:70.94px;}.cls-5,.cls-6{font-weight:700;}.cls-6{font-size:67.95px;}.cls-7{letter-spacing:-0.01em;}</style></defs><title>Asset 20</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><rect class="cls-1" x="109.71" y="157.34" width="681.87" height="639.69" transform="translate(-75.04 870.18) rotate(-83.42)"/><rect class="cls-2" x="130.84" y="136.22" width="639.7" height="681.86"/><polygon class="cls-3" points="754.48 802.05 568.76 802.05 568.76 797.47 749.89 797.47 749.89 616.51 754.48 616.51 754.48 802.05"/><path class="cls-3" d="M514.19,802.05H486.9v-4.58h27.29Zm-136.42,0H323.2v-4.58h54.57Z"/><polygon class="cls-3" points="295.92 802.05 110.2 802.05 110.2 616.51 114.78 616.51 114.78 797.47 295.92 797.47 295.92 802.05"/><path class="cls-3" d="M114.79,553.46h-4.58V521.9h4.58Zm0-157.68h-4.58v-63.1h4.58Z"/><polygon class="cls-3" points="114.78 301.14 110.2 301.14 110.2 115.61 295.92 115.61 295.92 120.19 114.78 120.19 114.78 301.14"/><path class="cls-3" d="M541.48,120.19H486.9v-4.58h54.58Zm-163.71,0H350.49v-4.58h27.28Z"/><polygon class="cls-3" points="754.48 301.14 749.89 301.14 749.89 120.19 568.76 120.19 568.76 115.61 754.48 115.61 754.48 301.14"/><path class="cls-3" d="M754.48,585h-4.59V521.9h4.59Zm0-189.22h-4.59V364.22h4.59Z"/><polygon class="cls-2" points="593.12 178.46 589.88 175.22 711.81 53.41 715.05 56.65 593.12 178.46"/><polygon class="cls-2" points="760.25 94.29 757.01 91.05 813.31 34.81 816.55 38.05 760.25 94.29"/><polygon class="cls-2" points="815.96 137.73 812.72 134.49 833.14 114.08 836.38 117.32 815.96 137.73"/><rect class="cls-2" x="845.76" y="28.61" width="82.79" height="4.59" transform="translate(238.2 636.59) rotate(-45.02)"/><rect class="cls-2" x="729.62" y="231.87" width="68.19" height="4.58" transform="translate(58.3 608.99) rotate(-45.03)"/><rect class="cls-2" x="78.13" y="667.78" width="112.69" height="4.58" transform="translate(-434.55 291.54) rotate(-45.02)"/><rect class="cls-2" x="-16.15" y="855.41" width="121.24" height="4.59" transform="translate(-593.66 282.88) rotate(-45.02)"/><polygon class="cls-2" points="118.14 866.06 114.9 862.82 136.06 841.69 139.3 844.93 118.14 866.06"/><polygon class="cls-2" points="191.47 856.61 188.23 853.37 229.81 811.82 233.05 815.06 191.47 856.61"/><rect class="cls-2" x="246.45" y="787.48" width="109.74" height="4.59" transform="translate(-470.38 444.79) rotate(-45.03)"/><rect class="cls-2" x="43.4" y="532.6" width="137.5" height="4.58" transform="translate(-345.53 236.21) rotate(-45.03)"/><polygon class="cls-2" points="735.79 435 732.55 431.76 808.94 355.44 812.19 358.68 735.79 435"/><g class="cls-4"><text class="cls-5" transform="translate(335.51 364.22)">OOPS!</text><text class="cls-6" transform="translate(193.2 616.51)">NO REQUESTS<tspan class="cls-7" x="365.02" y="0"></tspan><tspan x="406.53" y="0"></tspan></text></g></g></g></g></svg>
            </div>
        @endif

@endsection
