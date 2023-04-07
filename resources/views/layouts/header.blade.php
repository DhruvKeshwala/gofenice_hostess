<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body,
        .bg-dark {
            font-family: 'Poppins';
            background-color: #F8F8FA !important;
        }

        .form-signin {
            background-color: #FFFFFF !important;
        }

        @media (min-width: 991.98px) {
            .offcanvas-body ul li a {
                color: #000000 !important;
            }
        }

        .form-floating>.form-control {
            height: 40px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }

        .form-floating {
            padding-top: 15px !important;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('sign-in.css') }}" rel="stylesheet">
</head>

<body>
    <header class="p-1">
        <nav class="navbar navbar-dark bg-dark fixed-top"
            style="background-color:#FFFFFF!important;padding: 0px !important;">
            <div class="container-fluid">
                <a style="text-decoration: none;" class="d-none d-lg-block" data-bs-toggle="offcanvas"
                    href="#offcanvasResponsive" role="button" aria-controls="offcanvasResponsive">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <img src="{{ URL::asset('upload/wostess.png') }}" style="width: 200px;" />
                        <!-- <h1 style="color: #c98e49;">Hostess</h1> -->
                    </div>
                </a>
                <a class="navbar-toggler d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasResponsive"
                    role="button" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="offcanvas-lg offcanvas-start bg-dark" tabindex="-1" id="offcanvasResponsive"
                    aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        {{-- <img src="{{ URL::asset('assets/images/image_2023_03_21T13_45_50_816Z.png') }}" style="width: 150px;" /> --}}
                        <h1 style="color: #c98e49;">Hostess</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#offcanvasResponsive" aria-label="Close"
                            style="background-color: #ffffff;"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul style="margin: auto;"
                            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 d-block d-lg-inline-flex">
                            <li><a href="#" class="nav-link px-4"
                                    style="font-weight:bold!important;font-size: 18px;">Explore</a></li>
                            <li><a href="#" class="nav-link px-4"
                                    style="font-weight:bold!important;font-size: 18px;">Plans</a></li>
                            <li><a href="#" class="nav-link px-4"
                                    style="font-weight:bold!important;font-size: 18px;">Upload</a></li>
                        </ul>
                    </div>
                </div>
                @if (Auth::id() != null || Auth::id() != '')
                    <div class="text-end">
                        <span style="color: #000000;" class="">Welcome, {{ Auth::user()->name }} |</span>
                        <a href="{{ route('user.logout') }}" style="color: #000000;" class="">Logout</a>
                    </div>
                @else
                    <div class="text-end">
                        <a href="{{ route('login') }}"
                            style="color: #ED4B60; font-size: 14px;font-weight:bold!important;text-decoration: none;"
                            class="">Login </a>

                        <img src="{{ url('assets/images/header.png') }}" width="60px" height="60px" alt="Image" />

                        <button type="button" class="btn btn-dark"><a href="{{ route('register') }}"
                                style="color: white;font-size: 14px;text-decoration: none;" class="">Sign up
                                free</a></button>
                        {{-- <a href="{{ route('register') }}" style="color: #000000;" class="">Sign up free</a> --}}
                    </div>
                @endif
            </div>
        </nav>
    </header>
