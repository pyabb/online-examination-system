<x-app-layout>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row" id="user-profile">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="wideget-user mb-2">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="panel profile-cover">
                                                    <div class="profile-cover__action bg-img" style="background: url('{{ asset('assets/images/media/profile-background1.jpg') }}');"></div>
                                                    <div class="profile-cover__img">
                                                        <div class="profile-img-1">
                                                            <img src="{{ asset('assets/images/users/21.jpg') }}" alt="img">
                                                        </div>
                                                        <div class="profile-img-content text-dark text-start">
                                                            <div class="text-dark">
                                                                <h3 class="h3 mb-2">Percy Kewshun</h3>
                                                                <h5 class="text-muted">Web Developer</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-profile">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="px-0 px-sm-4">
                                                    <div class="social social-profile-buttons mt-5 float-end">
                                                        <div class="mt-3">
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-youtube"></i></a>
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                                            <a class="social-icon text-primary" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="main-profile-contact-list">
                                            <div class="me-5">
                                                <div class="media mb-4 d-flex">
                                                    <div class="media-icon bg-secondary bradius me-3 mt-1">
                                                        <i class="fe fe-edit fs-20 text-white"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="text-muted">Total exams</span>
                                                        <div class="fw-semibold fs-25">
                                                            328
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="me-5 mt-5 mt-md-0">
                                                <div class="media mb-4 d-flex">
                                                    <div class="media-icon bg-danger bradius text-white me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-users fs-20"></i>
                                                                </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="text-muted">Exams Approved</span>
                                                        <div class="fw-semibold fs-25">
                                                            937k
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="me-0 mt-5 mt-md-0">
                                                <div class="media">
                                                    <div class="media-icon bg-primary text-white bradius me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-cast fs-20"></i>
                                                                </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="text-muted">Exams Disapproved</span>
                                                        <div class="fw-semibold fs-25">
                                                            2,876
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">About</div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <h5>Biography<i class="fe fe-edit-3 text-primary mx-2"></i></h5>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consectetur deserunt, dolore facilis hic in inventore labore libero magni minus nam natus, officiis porro quibusdam quos recusandae temporibus voluptas voluptates.
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="d-flex align-items-center mb-3 mt-3">
                                            <div class="me-4 text-center text-primary">
                                                <span><i class="fe fe-map-pin fs-20"></i></span>
                                            </div>
                                            <div>
                                                <strong>San Juan de Lurigancho, Lima, Perú</strong>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3 mt-3">
                                            <div class="me-4 text-center text-primary">
                                                <span><i class="fe fe-phone fs-20"></i></span>
                                            </div>
                                            <div>
                                                <strong>+51 555778554</strong>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3 mt-3">
                                            <div class="me-4 text-center text-primary">
                                                <span><i class="fe fe-mail fs-20"></i></span>
                                            </div>
                                            <div>
                                                <strong>admin@nonemail.com.pe</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">


                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Profile</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" value="{{ __('admin@nonemail.com.pe') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Firstname</label>
                                                    <input class="form-control mb-4" placeholder="Input box (readonly)" type="text" value="{{ __('Calissa') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Lastname</label>
                                                    <input class="form-control mb-4" placeholder="Input box (readonly)" type="text" value="{{ __('Doe') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInputnumber">Document Type</label>
                                                    <input type="text" class="form-control" id="exampleInputnumber" placeholder="Contact number" value="{{ __('DNI') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInputnumber">Document Number</label>
                                                    <input type="number" class="form-control" id="exampleInputnumber" placeholder="Contact number" value="{{ __('45540762') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-end pt-4">
                                                <a href="javascript:void(0);" class="btn btn-secondary mt-1 mb-1">
                                                    <i class="fa fa-edit"></i> <span>Editar</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL-END -->
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
    <x-slot name="asset_js">
        <!-- sticky js -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>

        <!-- side menu JS-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
    </x-slot>
</x-app-layout>
