


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update User Information</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update-info') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="card_num" class="col-md-4 col-form-label text-md-right">Card Number</label>
                                <div class="col-md-6">
                                    <input id="card_num" type="text" class="form-control" name="card_num" value="{{ Auth::user()->card_num }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="social_num" class="col-md-4 col-form-label text-md-right">Social Number</label>
                                <div class="col-md-6">
                                    <input id="social_num" type="text" class="form-control" name="social_num" value="{{ Auth::user()->social_num }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Education level</label>
                                <select name="education" id="education" class="form-control">

                                    <option value="{{ Auth::user()->education }}" >{{ Auth::user()->education }}</option>


                                    <option value="L1">L1</option>
                                    <option value="L2">L2</option>
                                    <option value="L3">L3</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speciality</label>
                                <select name="Speciality" id="Speciality" class="form-control">

                                    <option value="{{ Auth::user()->Speciality }}" >{{ Auth::user()->Speciality }}</option>


                                    <option value="Ti">Ti</option>
                                    <option value="Si">Si</option>
                                    <option value="Gl">Gl</option>
                                    <option value="Sti">Sti</option>

                                </select>

                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- js for spec and educ --}}
    <script>
        const educationSelect = document.getElementById('education');
        const specialitySelect = document.getElementById('Speciality');

        educationSelect.addEventListener('change', () => {
            if (educationSelect.value === 'L1' || educationSelect.value === 'L2') {
                specialitySelect.innerHTML = '<option value="/">/</option>';
            } else {
                specialitySelect.innerHTML = '<option value="" selected disabled hidden>Select the Speciality</option><option value="Ti">Ti</option><option value="Si">Si</option><option value="Gl">Gl</option><option value="Sti">Sti</option>';
            }
        });
    </script>


