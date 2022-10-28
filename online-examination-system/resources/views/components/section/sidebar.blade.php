<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo" alt="logo">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Users</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Students</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Students</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> View students</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> Add new student</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-user"></i><span
                            class="side-menu__label">Teachers</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Teachers</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> View teachers</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> Add new teacher</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>School</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-clipboard"></i><span
                            class="side-menu__label">Exams</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Exams</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> View exams</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> Add new exam</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Settings</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-settings"></i><span
                            class="side-menu__label">Settings</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Settings</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> General config</a></li>
                        <li><a href="javascript:void(0);" class="slide-item"> Time zone</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
