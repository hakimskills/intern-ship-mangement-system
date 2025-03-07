
@extends('layouts.app3')
    @section('content')
        <ul class="nav justify-content-center">
            <div class="navbar1 justify-content-center">
                <a class="nav-link1 nav-link-ltr1" href="/home">profil</a>
                <a class="nav-link1 nav-link-ltr1" href="/form">send requests </a>
                <a class="nav-link1 nav-link-ltr1" href="#">offers</a>
                <a class="nav-link1 nav-link-ltr1" href="/recentReq">recent Requests <i class="fa-solid fa-rotate-right" style="color: #000000;"></i></a>
                <a class="nav-link1 nav-link-ltr1" href="/mark">interns finshed</a>


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
            @if(session('status'))

                <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title justify-content-center" id="statusModalLabel">offer</h5>
                            </div>
                            <div class="modal-body text-center">
                                <div class="circle">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p class="mt-3">{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script to automatically show and hide the modal -->
                <script>
                    var myModal = new bootstrap.Modal(document.getElementById('statusModal'));
                    myModal.show();

                    setTimeout(function() {
                        myModal.hide();
                    }, 3500);
                </script>
            @endif
        </div>
        <div class="container1  ">
        <div class="container border-1" id="featured-3">

            @if (count($offers) == 0)
<div class="nav justify-content-center">
                <svg style="width:30rem;height: 30rem; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1663.52 1634.79"><defs><style>.cls-1,.cls-4{fill:#fff;}.cls-2{fill:#6c63ff;}.cls-3{fill:#fefefe;}.cls-4{font-size:128.56px;font-family:Roboto-Black, Roboto;font-weight:800;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="237.07" y="246.9" width="1159.19" height="1235.63" transform="translate(104.4 -87.83) rotate(6.58)"/><rect class="cls-2" x="237.07" y="246.91" width="1159.21" height="1235.62"/><polygon class="cls-3" points="1367.19 1453.47 1030.64 1453.47 1030.64 1445.17 1358.88 1445.17 1358.88 1117.25 1367.19 1117.25 1367.19 1453.47"/><path class="cls-3" d="M931.75,1453.47H882.31v-8.3h49.44Zm-247.2,0H585.66v-8.3h98.89Z"/><polygon class="cls-3" points="536.23 1453.47 199.67 1453.47 199.67 1117.25 207.98 1117.25 207.98 1445.17 536.23 1445.17 536.23 1453.47"/><path class="cls-3" d="M208,1003h-8.31V945.81H208Zm0-285.74h-8.31V602.92H208Z"/><polygon class="cls-3" points="207.98 545.77 199.67 545.77 199.67 209.55 536.23 209.55 536.23 217.85 207.98 217.85 207.98 545.77"/><path class="cls-3" d="M981.2,217.85H882.31v-8.3H981.2Zm-296.65,0H635.11v-8.3h49.44Z"/><polygon class="cls-3" points="1367.19 545.77 1358.88 545.77 1358.88 217.85 1030.64 217.85 1030.64 209.55 1367.19 209.55 1367.19 545.77"/><path class="cls-3" d="M1367.19,1060.1h-8.31V945.81h8.31Zm0-342.89h-8.31V660.06h8.31Z"/><polygon class="cls-2" points="1074.79 323.44 1068.92 317.57 1289.87 96.84 1295.74 102.71 1074.79 323.44"/><polygon class="cls-2" points="1377.64 170.93 1371.77 165.06 1473.79 63.14 1479.67 69.01 1377.64 170.93"/><polygon class="cls-2" points="1478.59 249.64 1472.72 243.77 1509.73 206.79 1515.61 212.66 1478.59 249.64"/><rect class="cls-2" x="1532.5" y="51.8" width="150.02" height="8.31" transform="translate(431.74 1153.58) rotate(-45.02)"/><rect class="cls-2" x="1322.16" y="420.27" width="123.57" height="8.3" transform="translate(105.58 1103.55) rotate(-45.03)"/><rect class="cls-2" x="141.62" y="1210.06" width="204.2" height="8.3" transform="translate(-787.49 528.42) rotate(-45.02)"/><rect class="cls-2" x="-29.2" y="1550.06" width="219.7" height="8.31" transform="translate(-1075.82 512.75) rotate(-45.02)"/><polygon class="cls-2" points="214.07 1569.47 208.19 1563.6 246.54 1525.3 252.41 1531.17 214.07 1569.47"/><polygon class="cls-2" points="346.95 1552.33 341.08 1546.46 416.43 1471.18 422.3 1477.05 346.95 1552.33"/><rect class="cls-2" x="446.56" y="1427.09" width="198.87" height="8.31" transform="translate(-852.44 805.98) rotate(-45.03)"/><rect class="cls-2" x="78.62" y="965.21" width="249.16" height="8.3" transform="translate(-626.2 428.02) rotate(-45.03)"/><polygon class="cls-2" points="1333.32 788.33 1327.45 782.46 1465.88 644.16 1471.76 650.03 1333.32 788.33"/><text class="cls-4" transform="translate(422.3 626.37)">OOPS!<tspan x="0" y="308.55">NO OFFERS :(</tspan></text></g></g></svg>
</div>
            @endif
            <div class="row g-2 py-0 row-cols-1 row-cols-lg-3">
                @foreach ($offers as $offer)
                    <div class="feature col">
                        <a style="text-decoration: none" href="{{ route('more.offer', ['offer' => $offer->id]) }}">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-2"></div>
                            <div class="card1">
                                <div class="face face1">
                                    <div class="content">
                                        <div class="nav justify-content-center">
                                        <img src="{{ asset('storage/'.$offer->logo) }}" >
                                        </div>
                                        <h3 style="font-weight: bold;">{{ $offer->company_name }}</h3>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <div class="content">
                                        <h6 style="color: black; font-weight: bold;">for : {{ $offer->manager_name }}</h6>
                                        <h6 style="color: BLACK; font-weight: bold;">Theme: {{ $offer->post }}</h6>
                                        <p style="color: grey; font-weight: bold;"><i class="fa-sharp fa-solid fa-location-dot" style="color: #6c63ff;"></i>: {{ ucfirst($offer->address) }}</p>
                                        <p style="color: grey; font-weight: bold;"><i class="fa-solid fa-phone" style="color: #6c63ff;"></i>:  {{ $offer->phone_num }}</p>
                                        <p style="color: grey; font-weight: bold;"><i class="fa-solid fa-clock" style="color: #6c63ff;"></i>: {{ $offer->period }} days</p>
                                        <div class="nav justify-content-between align-items-end">

                                            <a style="text-decoration: none;color: #6c63ff; font-weight: bold;" href="{{ route('accept.offer', ['offer' => $offer->id]) }}">
                                                <span>send</span>
                                            </a>
                                            <div class="more-link">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>




        </div>
        </div>
    @endsection


