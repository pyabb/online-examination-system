<x-app-layout>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Create Exam</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Exam</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- app content -->
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <form class="card form-horizontal" method="POST" action="{{ route('admin.exams') }}">
                            @csrf
                            <div class="card-header d-flex flex-column align-items-start">
                                <h4 class="card-title">Data of the new test</h4>
                                @if(session()->has('message'))
                                    <div class="mt-4 text-sm text-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                                <!-- Validation Errors -->
                                <!-- create another component to display all errors -->
                                <x-auth-validation-errors class="mt-4 mb-4" :errors="$errors" />
                            </div>
                            <div class="card-body">
                                <div class="form-horizontal">
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label class="form-label">Course</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="course" placeholder="Course ..." value="{{ old('course') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label class="form-label">Theme</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="theme" placeholder="Theme ..." value="{{ old('theme') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="description" placeholder="description ..." value="{{ old('description') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class=" form-label">Questions</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="questions" placeholder="Recommended 5 questions ..." value="{{ old('questions') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Score</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="score" placeholder="Max score ..." value="{{ old('score') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">empty</label>
                                            <div class="">
                                                <input type="number" class="form-control" {{--name="lastname"--}} placeholder="No values ..." value="{{ old('empty') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">empty</label>
                                            <div class="">
                                                <input type="number" class="form-control" {{--name="lastname"--}} placeholder="No values ..." value="{{ old('empty') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class=" form-label">Date</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" name="date" placeholder="YYYY/MM/DD" type="text" value="{{ old('date') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Initial hour</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <!-- input-group-text -->
                                                <input class="form-control" id="tpBasic" name="initHour" placeholder="00:00xm" type="text" value="{{ old('initHour') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Final hour</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <!-- input-group-text -->
                                                <input class="form-control" name="endHour" placeholder="00:00xm" type="text" id="tpBasic2">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Time</label>
                                            <div class="">
                                                <input type="number" name="time" class="form-control" placeholder="Recommended 20 min ..." value="{{ old('time') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success my-1">Save</button>
                                <a href="{{ route('admin.exams') }}" class="btn btn-danger my-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- app content -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>

    <x-slot name="asset_js">
        <!-- sticky js -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>

        <!-- side menu JS-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>

        <!-- TypeHead js -->
        <script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
        <script src="{{ asset('assets/js/typehead.js') }}"></script>

        <!-- FILE UPLOADES JS -->
        <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

        <!-- BOOTSTRAP-DATERANGEPICKER JS -->
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

        <!-- INTERNAL Sumoselect js-->
        <script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

        <!-- TIMEPICKER JS -->
        <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
        <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

        <!-- INTERNAL jquery transfer js-->
        <script src="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

        <!-- INTERNAL multi js-->
        <script src="{{ asset('assets/plugins/multi/multi.min.js') }}"></script>

        <!-- DATEPICKER JS -->
        <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
        <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

        <!-- COLOR PICKER JS -->
        <script src="{{ asset('assets/plugins/pickr-master/pickr.es5.min.js') }}"></script>
        <script src="{{ asset('assets/js/picker.js') }}"></script>

        <!-- MULTI SELECT JS-->
        <script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
        <script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

        <!-- FORMELEMENTS JS -->
        <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
        <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    </x-slot>
</x-app-layout>
