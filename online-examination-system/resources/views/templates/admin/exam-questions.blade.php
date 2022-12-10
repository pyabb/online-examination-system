<x-app-layout>

    <x-slot name="css">
        <link id="style" href="{{ asset('assets/dist/css/sweetalert2.min.css') }}" rel="stylesheet" />
    </x-slot>

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
                        <div class="card form-horizontal active">
                            <div class="card-header d-flex align-items-center justify-content-between" role="tab" id="headingOne1">
                                <h4 class="card-title">
                                    Exam details
                                </h4>
                                <button class="btn btn-outline-primary" role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    show
                                </button>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="card form-horizontal shadow-none">
                                    <div class="card-body">
                                        <div class="form-horizontal" data-exam-id="{{ $exam->id }}" id="exam-id">
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <label class="form-label">Course</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" value="{{ $exam->course }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Theme</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" value="{{ $exam->theme }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-md-12">
                                                    <label class="form-label">Description</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" value="{{ $exam->description }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-md-3">
                                                    <label class=" form-label">Questions</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" value="{{ $exam->questions }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class=" form-label">Score</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" value="{{ (int)$exam->score }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class=" form-label">Time</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" value="{{ $exam->time }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label">Random <i class="fa fa-question-circle-o" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Random field definition ..."></i></label>
                                                    <div class="">
                                                        <select class="select2 form-select" name="" id="">
                                                            <option selected disabled>Select</option>
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
                                                        </div><input class="form-control fc-datepicker" type="text" value="{{ date('Y/m/d', strtotime($exam->init_date)) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class=" form-label">Initial hour</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                        </div>
                                                        <!-- input-group-text -->
                                                        <input class="form-control" type="text" value="{{ date('h:i a', strtotime($exam->init_date)) }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="{{ route('admin.exam.edit', $exam->id) }}" class="btn btn-success my-1">Edit details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card form-horizontal">
                            <div class="card-header d-flex flex-column align-items-start">
                                <h4 class="card-title">Exam question Nº {{ $question->relid ?? 'None' }}</h4>
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
                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-4">
                                            <label class="form-label mb-3">Question</label>
                                            <div class="">
                                                <select class="select2 form-select" name="" id="questions" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                                                    @php $count = 1; $selected = null; @endphp
                                                    @foreach($questions as $q)
                                                        @if($question->relid == $count):
                                                            @php $selected = 'selected'; @endphp
                                                        @endif;
                                                        <option value="{{ $q->id }}" {{ $selected }}>{{ $count }}</option>
                                                            @php $count++; $selected = null; @endphp
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label mb-3">Write question</label>
                                            <div class="">
                                                <textarea type="text" class="form-control" placeholder="write your question here! ..." rows="4" id="exam-question">{{ $question->question }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-success my-1" id="save-question">Save</button>
                                            <a href="javascript:void(0);" class="btn btn-danger my-1">Delete</a>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-label mb-2">Answers</div>
                                                {{--<div><button class="btn btn-outline-info" id="create-answers">create</button></div>
                                                <div class="custom-controls-stacked" id="answers-container">

                                                    <div class="row mb-4">
                                                        <div class="col-md-10">
                                                            <label class="custom-control custom-radio-md mb-3">
                                                                <input type="radio" class="custom-control-input" name="example-radios" value="respuesta 1">
                                                                <span class="custom-control-label">MOLECULAS- ELEMENTO- ATOMOS- ELECTRONES</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2 btn-list">
                                                            <a href="javascript:void(0);" id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                                <span class="fe fe-edit"></span>
                                                            </a>
                                                            <button id="bDel" type="button" class="btn btn-sm btn-danger">
                                                                <span class="fe fe-trash-2"></span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- -->
        <script src="{{ asset(('assets/dist/js/answers.min.js')) }}"></script>
        <script src="{{ asset(('assets/dist/js/questions.min.js')) }}"></script>
    </x-slot>
</x-app-layout>
