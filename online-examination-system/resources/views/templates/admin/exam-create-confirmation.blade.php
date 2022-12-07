<x-app-layout>

    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Confirmation</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.exams') }}">Exams</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.exam.create') }}">Add new exam</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
            </div>

            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="expanel expanel-default my-5">

                                        @if(session()->has('success'))
                                            <div class="expanel-heading text-center h3">
                                                {{ session()->get('message') }}
                                            </div>

                                            <div class="expanel-body">
                                                <p class="text-center">ID of new exam created: <span class="h4">{{ session()->get('examId') }}{{--2b0c51f3-96bb-439c-ac9d-a47e4bcfeb20--}}</span></p>
                                                <p class="text-center">After you have created the new exam, you must create
                                                    all the questions you need.</p>
                                                <p class="text-center">If you want, you can create the questions at a later
                                                    time. Click on the following <a href="{{ route('admin.exams') }}" class="text-primary">link</a> to return to exams page.</p>
                                            </div>

                                            <div class="expanel-footer bg-transparent border-top-0 text-center">
                                                <a href="{{ route('admin.exam.questions', [session()->get('id'), session()->get('firstQuestionId')]) }}" class="btn btn-outline-primary">Edit questions</a>
                                            </div>
                                        @else
                                            <div class="expanel-heading text-center h3">
                                                The exam dont exists
                                            </div>

                                            <div class="expanel-body">
                                                <p class="text-center">ID of new exam created: <span class="h4">None</span></p>
                                                <p class="text-center">The exam creation confirmation does not exist because you must first create a new exam.</p>
                                                <p class="text-center">To create a new exam, click in the following button to return to create exams page.</p>
                                            </div>

                                            <div class="expanel-footer bg-transparent border-top-0 text-center">
                                                <a href="{{ route('admin.exam.create') }}" class="btn btn-outline-primary">Create exam</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
    </div>

    <x-slot name="asset_js">
        <!-- sticky js -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>

        <!-- side menu JS-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
    </x-slot>
</x-app-layout>
