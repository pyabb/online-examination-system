<x-app-layout>

    <x-slot name="css">
        <link id="style" href="{{ asset('assets/dist/css/sweetalert2.min.css') }}" rel="stylesheet" />
    </x-slot>

    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Students</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Students</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Students</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-20p border-bottom-0">Name</th>
                                            <th class="wd-20p border-bottom-0">E-mail</th>
                                            <th class="wd-20p border-bottom-0">Document</th>
                                            <th class="wd-15p border-bottom-0">Phone</th>
                                            <th class="wd-15p border-bottom-0">Register</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->firstname }} {{$student->lastname}}</td>
                                                <td>{{ $student->email }}</td>
                                                <td>{{ $student->documentType }} - {{ $student->document }}</td>
                                                <td>{{ $student->phone }}</td>
                                                <td>{{ $student->created_at }}</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="{{ route('admin.student.edit', $student->id) }}" id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                            <span class="fe fe-edit"> </span>
                                                        </a>
                                                        <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                            <span class="fe fe-trash-2"> </span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content closed-->

    <x-slot name="asset_js">
        <!-- sticky js -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>
        <!-- side menu JS-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <!-- DATA TABLE JS-->
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <!-- -->
        <script src="{{ asset('assets/js/table-data.js') }}"></script>
        <!-- -->
        <script src="{{ asset('assets/dist/js/user.bundle.min.js') }}"></script>
    </x-slot>
</x-app-layout>
