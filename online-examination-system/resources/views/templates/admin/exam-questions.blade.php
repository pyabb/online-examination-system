<x-app-layout>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Exam questions</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.exams') }}">Exams</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Exam questions </li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- app content -->
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <form class="card form-horizontal" method="POST" action="{{ route('admin.exam.update', $exam->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-header d-flex flex-column align-items-start">
                                <h4 class="card-title">Edit exam</h4>
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
                                                <input type="text" class="form-control" name="course" placeholder="Course ..." value="{{ $exam->course }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label class="form-label">Theme</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="theme" placeholder="Theme ..." value="{{ $exam->theme }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="description" placeholder="description ..." value="{{ $exam->description }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class=" form-label">Questions</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="questions" placeholder="Recommended 5 questions ..." value="{{ $exam->questions }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Score</label>
                                            <div class="">
                                                <input type="number" class="form-control" name="score" placeholder="Max score ..." value="{{ (int)$exam->score }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Time</label>
                                            <div class="">
                                                <input type="number" name="time" class="form-control" placeholder="Recommended 20 min ..." value="{{ $exam->time }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Random <i class="fa fa-question-circle-o" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Random field definition ..."></i></label>
                                            <div class="">
                                                <select class="select2 form-select" name="" id="">
                                                    <option selected disabled>Select</option>
                                                    <option value="1">True</option>
                                                    <option value="0">False</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class=" form-label">Date</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input class="form-control fc-datepicker" name="date" placeholder="YYYY/MM/DD" type="text" value="{{ date('Y/m/d', strtotime($exam->init_date)) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class=" form-label">Initial hour</label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <!-- input-group-text -->
                                                <input class="form-control" id="tpBasic" name="init_hour" placeholder="00:00 xm" type="text" value="{{ date('h:i a', strtotime($exam->init_date)) }}">
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

        <!-- BOOTSTRAP-DATERANGEPICKER JS -->
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

        <!-- INTERNAL Sumoselect js-->
        {{--<script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>--}}

        <!-- TIMEPICKER JS -->
        <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
        <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

        <!-- INTERNAL multi js-->
        {{--<script src="{{ asset('assets/plugins/multi/multi.min.js') }}"></script>--}}

        <!-- DATEPICKER JS -->
        <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
        <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>

        <!-- MULTI SELECT JS-->
        {{--<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
        <script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>--}}

        <!-- FORM ELEMENTS JS -->
        <script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
        <script src="{{ asset('assets/js/form-elements.js') }}"></script>

    </x-slot>
</x-app-layout>
