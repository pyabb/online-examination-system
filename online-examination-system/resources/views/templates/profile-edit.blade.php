<x-app-layout>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Edit Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ Auth::user()->isAdmin ? route('admin.dashboard') : route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ Auth::user()->isAdmin ? route('admin.profile') : route('profile') }}">Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Password</div>
                            </div>
                            <div class="card-body">
                                <div class="text-center chat-image mb-5">
                                    <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                        <a class="" href="{{ route('profile') }}">
                                            <img alt="avatar" src="{{ asset('assets/images/users/21.jpg') }}" class="brround">
                                        </a>
                                    </div>
                                    <div class="main-chat-msg-name">
                                        <a href="{{ route('profile') }}">
                                            <h5 class="mb-1 text-dark fw-semibold">Percy Kewshun</h5>
                                        </a>
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Web Designer</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Current Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 form-control" type="password" placeholder="Current Password" autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 form-control" type="password" placeholder="New Password" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="input100 form-control" type="password" placeholder="Confirm Password" autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <form class="card" method="POST" action="{{ Auth::user()->isAdmin ? route('admin.profile.edit') : route('profile.edit') }}">
                            @csrf
                            <div class="card-header d-flex flex-column align-items-start">
                                <h3 class="card-title">Edit Profile</h3>

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
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="{{ Auth::user()->firstname }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" value="{{ Auth::user()->lastname }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="documentType">Document Type</label>
                                            <select class="form-control select2 form-select" name="documentType" id="documentType">
                                                @if(Auth::user()->documentType == 'DNI')
                                                    <option value="DNI" selected>DNI</option>
                                                @else
                                                    <option value="DNI">DNI</option>
                                                @endif

                                                @if(Auth::user()->documentType == 'CE')
                                                    <option value="CE" selected>CE</option>
                                                @else
                                                    <option value="CE">CE</option>
                                                @endif

                                                @if(Auth::user()->documentType == 'OTHER')
                                                    <option value="OTHER" selected>OTHER</option>
                                                @else
                                                    <option value="OTHER">OTHER</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="document">Document Number</label>
                                            <input type="number" class="form-control" id="document" name="document" placeholder="Document" value="{{ Auth::user()->document }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="{{ Auth::user()->country }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="State" value="{{ Auth::user()->state }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ Auth::user()->city }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Contact number" value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">About Me</label>
                                    <textarea class="form-control" name="aboutHimself" rows="6">{{ Auth::user()->aboutHimself }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success my-1">Save</button>
                                <a href="{{ Auth::user()->isAdmin ? route('admin.profile') : route('profile') }}" class="btn btn-danger my-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>
    <x-slot name="asset_js">
        <!-- sticky js -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>

        <!-- side menu JS-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

        <!-- SHOW PASSWORD JS -->
        <script src="{{ asset('assets/js/show-password.min.js') }}"></script>
    </x-slot>
</x-app-layout>
