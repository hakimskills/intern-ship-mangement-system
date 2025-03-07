@extends('layouts.app3')
@section('content')
    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>
            <a class="nav-link1 nav-link-ltr1" href="/company/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>
            <a class="nav-link1 nav-link-ltr1" href="/internship">list of interns</a>
        </div>
    </ul>
    <div class="container mt-4 justify-content-center">
        @if(session('status'))
            <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
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
    <div class="nav justify-content-center">
        <div class="card" style="width:700px">
            <div class="card-header text-center font-weight-bold" style="background-color: #6c63ff">
                <h4 style="color: white"> OFFER INTERNSHIP </h4>
            </div>
            <div class="card-body" style="background-color: white">
                <div class="formbold-main-wrapper">
                    <div class="formbold-form-wrapper">
                        <form name="offer" id="offer" method="post" action="{{url('store-offer')}}">
                            {{ csrf_field() }}
                            <div class="formbold-input-flex">
                                <div>
                                    <input
                                        type="date"
                                        name="dateS"
                                        id="dateS"
                                        placeholder="time of the internship ???"
                                        class="formbold-form-input"
                                        required
                                        onchange="calculatePeriod()"
                                    />
                                    <label for="dateS" class="formbold-form-label"> Date starts </label>
                                </div>
                            </div>
                            <div class="formbold-input-flex">
                                <div>
                                    <input
                                        type="date"
                                        name="dateE"
                                        id="dateE"
                                        placeholder="time of the internship ???"
                                        class="formbold-form-input"
                                        required
                                        onchange="calculatePeriod()"
                                    />
                                    <label for="dateE" class="formbold-form-label"> Date ends </label>
                                </div>
                            </div>
                            <div class="formbold-input-flex">
                                <div>
                                    <input
                                        type="text"
                                        name="period"
                                        id="period"
                                        placeholder="Number of days"
                                        class="formbold-form-input"
                                        readonly
                                    />
                                    <label for="period" class="formbold-form-label"> Period </label>
                                </div>
                            </div>
                            <div class="formbold-input-flex">
                                <div>
                                    <input
                                        type="text"
                                        name="post"
                                        id="email"
                                        placeholder="which post you want ???"
                                        class="formbold-form-input"
                                        required
                                    />
                                    <label for="email" class="formbold-form-label"> Post </label>
                                </div>
                            </div>
                            <div class="formbold-textarea">
                                <textarea
                                    rows="6"
                                    name="message"
                                    id="message"
                                    placeholder="Write your message..."
                                    class="formbold-form-input"
                                    required
                                ></textarea>
                                <label for="message" class="formbold-form-label"> Description </label>
                            </div>
                            <div class="formbold-input-file">
                                <button class="custom-btn btn-5" type="submit"> publish </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function calculatePeriod() {
            var startDate = document.getElementById('dateS').value;
            var endDate = document.getElementById('dateE').value;

            if (startDate && endDate) {
                var diffInTime = new Date(endDate) - new Date(startDate);
                var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24));

                if (diffInDays < 0 || diffInDays < 15) {
                    // Invalid dates, clear the input fields and show a popup alert
                    document.getElementById('dateS').value = '';
                    document.getElementById('dateE').value = '';
                    alert("Start date must be within 15 days from the end date.");
                } else {
                    document.getElementById('period').value = diffInDays;
                }
            }
        }
    </script>

@endsection
