@extends('layouts.app3')
@section('content')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script>
        function confirmDelete(id) {
            var overlay = '<div class="overlay"></div>';
            document.body.insertAdjacentHTML('beforeend', overlay);

            var confirmation = '<div class="confirmation">' +
                '<h2>Confirm Delete</h2>' +
                '<p>Are you sure you want to delete this request?</p>' +
                '<div class="btn-container">' +
                '<div class="buttons"  style="display:flex; align-items: center" >'+
                '<button class="custom-btn btn-5" style="margin-left: 10px" onclick="deleteRequest('+id+')">Yes</button>' +
                '<button class="custom-btn btn-5"style="margin-left: 10px"  onclick="hideConfirmation()">No</button>' +
                '</div>'+
                '</div>'+
                '</div>';

            document.body.insertAdjacentHTML('beforeend', confirmation);
            return false;
        }

        function deleteRequest(id) {
            document.getElementById('delete-form-' + id).submit();
        }

        function hideConfirmation() {
            var confirmation = document.querySelector('.confirmation');
            confirmation.parentNode.removeChild(confirmation);

            var overlay = document.querySelector('.overlay');
            overlay.parentNode.removeChild(overlay);
        }
    </script>

    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/home">profil</a>
            <a class="nav-link1 nav-link-ltr1" href="/form">send requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offer">offers</a>
            <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>
            <a class="nav-link1 nav-link-ltr1" href="/mark">interns finshed</a>


        </div>

    </ul>
    @if($employees->count()==0 )
        <div class="nav justify-content-center">
        <svg style="width:30rem;height: 30rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 918.03 902.2"><defs><style>.cls-1,.cls-5,.cls-6{fill:#fff;}.cls-2{fill:#6c63ff;}.cls-3{fill:#fefefe;}.cls-4,.cls-5,.cls-6{isolation:isolate;}.cls-5{font-size:70.94px;}.cls-5,.cls-6{font-family:Roboto-Bold, Roboto;font-weight:700;}.cls-6{font-size:67.95px;}.cls-7{letter-spacing:-0.01em;}</style></defs><title>Asset 20</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Layer_1-2-2" data-name="Layer 1-2"><rect class="cls-1" x="109.71" y="157.34" width="681.87" height="639.69" transform="translate(-75.04 870.18) rotate(-83.42)"/><rect class="cls-2" x="130.84" y="136.22" width="639.7" height="681.86"/><polygon class="cls-3" points="754.48 802.05 568.76 802.05 568.76 797.47 749.89 797.47 749.89 616.51 754.48 616.51 754.48 802.05"/><path class="cls-3" d="M514.19,802.05H486.9v-4.58h27.29Zm-136.42,0H323.2v-4.58h54.57Z"/><polygon class="cls-3" points="295.92 802.05 110.2 802.05 110.2 616.51 114.78 616.51 114.78 797.47 295.92 797.47 295.92 802.05"/><path class="cls-3" d="M114.79,553.46h-4.58V521.9h4.58Zm0-157.68h-4.58v-63.1h4.58Z"/><polygon class="cls-3" points="114.78 301.14 110.2 301.14 110.2 115.61 295.92 115.61 295.92 120.19 114.78 120.19 114.78 301.14"/><path class="cls-3" d="M541.48,120.19H486.9v-4.58h54.58Zm-163.71,0H350.49v-4.58h27.28Z"/><polygon class="cls-3" points="754.48 301.14 749.89 301.14 749.89 120.19 568.76 120.19 568.76 115.61 754.48 115.61 754.48 301.14"/><path class="cls-3" d="M754.48,585h-4.59V521.9h4.59Zm0-189.22h-4.59V364.22h4.59Z"/><polygon class="cls-2" points="593.12 178.46 589.88 175.22 711.81 53.41 715.05 56.65 593.12 178.46"/><polygon class="cls-2" points="760.25 94.29 757.01 91.05 813.31 34.81 816.55 38.05 760.25 94.29"/><polygon class="cls-2" points="815.96 137.73 812.72 134.49 833.14 114.08 836.38 117.32 815.96 137.73"/><rect class="cls-2" x="845.76" y="28.61" width="82.79" height="4.59" transform="translate(238.2 636.59) rotate(-45.02)"/><rect class="cls-2" x="729.62" y="231.87" width="68.19" height="4.58" transform="translate(58.3 608.99) rotate(-45.03)"/><rect class="cls-2" x="78.13" y="667.78" width="112.69" height="4.58" transform="translate(-434.55 291.54) rotate(-45.02)"/><rect class="cls-2" x="-16.15" y="855.41" width="121.24" height="4.59" transform="translate(-593.66 282.88) rotate(-45.02)"/><polygon class="cls-2" points="118.14 866.06 114.9 862.82 136.06 841.69 139.3 844.93 118.14 866.06"/><polygon class="cls-2" points="191.47 856.61 188.23 853.37 229.81 811.82 233.05 815.06 191.47 856.61"/><rect class="cls-2" x="246.45" y="787.48" width="109.74" height="4.59" transform="translate(-470.38 444.79) rotate(-45.03)"/><rect class="cls-2" x="43.4" y="532.6" width="137.5" height="4.58" transform="translate(-345.53 236.21) rotate(-45.03)"/><polygon class="cls-2" points="735.79 435 732.55 431.76 808.94 355.44 812.19 358.68 735.79 435"/><g class="cls-4"><text class="cls-5" transform="translate(335.51 364.22)">OOPS!</text><text class="cls-6" transform="translate(193.2 616.51)">NO REQUES<tspan class="cls-7" x="365.02" y="0">T</tspan><tspan x="406.53" y="0">S :(</tspan></text></g></g></g></g></svg>
        </div>
    @else



        <table class="table  ms-3 table-striped-columns" STYLE="width: 90%" >
            <thead>
            <tr class="table" style="background-color: #6c63ff;border-top: none ">

                <th scope="col"  style="color: white">Theme</th>
                <th scope="col" style="color: white">Date sent</th>

                <th scope="col" style="color: white">Department validate </th>
                <th scope="col" style="color: white">Company validate </th>

            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)

                <tr >

                    <td data-label="Post" >{{ $employee->post }}</td>
                    <td data-label="Date sent">{{ $employee->created_at }}</td>

                    @if($employee->accepted == 0)
                        <td data-label="department validate" >Not consulted</td>
                        <td data-label="Company validate" >Not consulted</td>
                        @if($employee->isOffer == 0)
                        <td data-label="Edit" >
                            <a  href="{{ route('employees.edit', $employee->id) }}" class="btn-sm " title="edit">
                                    <i class="fa-solid fa-pen-to-square" style="color: #6c63ff;"></i>
                            </a>
                        </td>
                        @endif

                        <td data-label="Delete">
                            <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.delete', $employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none;mix-blend-mode: color-burn"        title="delete" onclick="return confirmDelete({{ $employee->id }})">
                                    <i class="fa-solid fa-trash-can" style="color: red;"></i>
                                </button>
                            </form>
                        </td>
                    @elseif($employee->accepted == 1 && $employee->manager_validation == 0)

                        <td data-label="Stat" >Accepted <i class="fa-solid fa-check" style="color: #17750a;"></i></td>

                        <td data-label="Stat"  >Not consulted</td>
                    @elseif($employee->accepted == 2 && $employee->manager_validation == 0)
                        <td data-label="Stat">Refused
                            <a href="#" onclick="showReasonModal('{{ $employee->refusal_reason }}')">
                                <i class="fa-regular fa-comment-dots" style="color: #ef2525;"></i>
                            </a>
                        </td>
<td>//</td>


                @elseif($employee->accepted == 1 && $employee->manager_validation == 1 )

                            <td data-label="Stat" >Accepted <i class="fa-solid fa-check" style="color: #17750a;"></i></td>

                        <td data-label="Stat"  >Accepted <i class="fa-solid fa-check" style="color: #17750a;"></i></td>

                    @elseif($employee->accepted == 1 && $employee->manager_validation == 2 )

                        <td data-label="Stat"  > Refused <i class="fa-solid fa-xmark" style="color: #cf0707;"></i></td>

                    @endif


                    @endforeach
                </tr>

            </tbody>
        </table>
        <div id="reasonModal" class="modal">
            <div class="modal-content ju">
                <span class="close text-end" style="color: #6c63ff" onclick="hideReasonModal()">&times;</span>
                <p id="reasonText" style="color: red;text-align: center"></p>
                <a href="{{route('send.req')}}" STYLE="text-decoration: none;color: #6c63ff">Send another request</a>
            </div>
        </div>
        <script>
            function showReasonModal(reason) {
                var modal = document.getElementById("reasonModal");
                var reasonText = document.getElementById("reasonText");
                reasonText.innerText = reason;
                modal.style.display = "block";
            }

            function hideReasonModal() {
                var modal = document.getElementById("reasonModal");
                modal.style.display = "none";
            }
        </script>

    @endif
@endsection
