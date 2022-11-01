<!doctype html>
<html lang="en" dir="ltr">

<x-section.head />

<body class="app sidebar-mini ltr login-img dark-mode">

<!-- BACKGROUND-IMAGE -->
<div class="">

    <x-common.global-loader />

    <!-- PAGE -->
    <div class="page">
        <div class="">

            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <a href="javascript:void(0);"><img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img" alt=""></a>
                </div>
            </div>

            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" method="POST" action="{{ $form_action }}">
                        @csrf
                        <span class="login100-form-title pb-5">
                            {{ $form_title }}
                        </span>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <div class="panel panel-primary">
                            <div class="tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="mx-0"><a href="javascript:void(0);" class="active" >Email</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">

                                        <!-- email address -->
                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <x-input id="email" type="email" name="email" placeholder="{{ __('Email') }}" :value="old('email')" required autofocus />
                                        </div>
                                        <!-- end email address -->

                                        <!-- password -->
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <x-input id="password" type="password" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password" />
                                        </div>
                                        <!-- end password -->

                                        <div class="text-end pt-4">
                                            <p class="mb-0"><a href="javascript:void(0);" class="text-primary ms-1">Forgot Password?</a></p>
                                        </div>

                                        <!-- submit button -->
                                        <div class="container-login100-form-btn">
                                            <button type='submit' class="login100-form-btn btn-primary border-0 focus:outline-none">
                                                {{ __('Log in') }}
                                            </button>
                                        </div>
                                        <!-- end submit button -->

                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Not a member?<a href="javascript:void(0);" class="text-primary ms-1">Sign UP</a></p>
                                        </div>

                                        <!-- social login -->
                                        <label class="login-social-icon"><span>Login with Social</span></label>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-google"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login text-center">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- end social login -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->

<x-section.asset-js>
    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('assets/js/show-password.min.js') }}"></script>
</x-section.asset-js>

</body>
</html>
