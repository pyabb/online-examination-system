<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">

            <!-- sidebar-toggle-->
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- end sidebar-toggle-->

            <!-- logo -->
            <a class="logo-horizontal " href="javascript:void(0);">
                <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                {{--<img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">--}}
            </a>
            <!-- end logo -->

            <div class="d-flex order-lg-2 ms-auto header-right-icons">

                <!-- toggle button -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <!-- end toggle button -->

                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">

                            <!-- country -->
                            <div class="d-flex country">
                                <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                   data-bs-toggle="modal">
                                    <i class="fe fe-globe"></i><span
                                        class="fs-16 ms-2 d-none d-xl-block">English</span>
                                </a>
                            </div>
                            <!-- end country -->

                            <!-- notifications -->
                            <div class="dropdown  d-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-bell"></i>
                                    <span class=" pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications</h6>
                                        </div>
                                    </div>
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                                            <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                <i class="fe fe-mail"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New Application received</h5>
                                                <span class="notification-subtext">3 days ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="javascript:void(0);">
                                            <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                <i class="fe fe-user-plus"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Friend Requests</h5>
                                                <span class="notification-subtext">1 day ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                </div>
                            </div>
                            <!-- end notifications -->

                            <!-- profile -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="{{ asset('assets/images/users/21.jpg') }}" alt="profile-user" class="avatar profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ Auth::user()->name }}</h5>
                                            <small class="text-muted">Senior Admin</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="dropdown-icon fe fe-settings"></i> Settings
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="this.closest('form').submit();">
                                            <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <!-- end profile -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
