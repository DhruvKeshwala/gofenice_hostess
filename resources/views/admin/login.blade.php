<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="../../../">
        <title>Admin Login | Hostess</title>
        <meta name="description"
            content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords"
            content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
<link rel="shortcut icon" href="{{ URL::asset('assets/admin/media/logos/favicon.ico') }}" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link href="{{ URL::asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

<div id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ URL::asset('assets/admin/media/illustrations/sketchy-1/14.png') }})">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="../../demo1/dist/index.html" class="mb-12">
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 style="color: #c98e49;">Hostess</h1>
                            <h1 class="text-dark mb-3">Sign In</h1>                            
                            <input type="hidden" name="role" value="admin">
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</label>
                            <input id="mobileno"
                                class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                type="text" name="email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus autocomplete="off" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</label>
                            </div>
                            <input id="password"
                                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                type="password" name="password" required autocomplete="current-password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/admin/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    </body>
    </html>