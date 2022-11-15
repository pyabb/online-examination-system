<x-app-layout>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Create Student</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.students') }}">Students</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Student</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- app content -->
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <form class="card form-horizontal" method="POST" action="{{ route('admin.students') }}">
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title">Data of the student</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-horizontal">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Email address</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="email" placeholder="Email address ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Firstname</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="firstname" placeholder="Firstname ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Lastname</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="lastname" placeholder="Lastname ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Document Type</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-select" name="documentType" id="documentType">
                                                        <option selected disabled>Document Type</option>
                                                        <option value="DNI">DNI</option>
                                                        <option value="CE">CE</option>
                                                        <option value="OTHER">OTHER</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Document number</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="document" placeholder="Document number ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Country</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="country" placeholder="Country ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">State</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="state" placeholder="State ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">City</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="city" placeholder="City ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="phone" placeholder="Phone ...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" name="password" placeholder="password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 form-label">Confirm password</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success my-1">Save</button>
                                <a href="{{ route('admin.students') }}" class="btn btn-danger my-1">Cancel</a>
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
    </x-slot>
</x-app-layout>
