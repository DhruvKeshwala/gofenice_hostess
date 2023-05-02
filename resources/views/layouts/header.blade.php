<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        
    </head>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    
    {{-- Added by Dev --}}
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
        integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    {{-- end --}}
    <link rel="stylesheet" href="{{ URL::asset('css/style_header.css') }}">
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
    
        .dropdown {
            position: relative;
            display: inline-block;
        }
    
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
    
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
    
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }
    
        .dropdown:hover .dropdown-content {
            display: block;
        }
    
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    
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
            background-color: #F8F8FA !important;
        }
    
        .form-signin {
            background-color: #FFFFFF !important;
        }
    
        .px-4 {
            padding-right: 5.5rem !important;
            padding-left: 1.5rem !important;
        }
    
        .offcanvas-body a {
            font-family: 'Montserrat', sans-serif;
        }
    
        .form-check.py-2 span {
            font-size: 14px;
        }
    
        span {
            font-family: 'Montserrat', sans-serif;
        }
    
        .text-end>a {
            font-family: 'Montserrat', sans-serif;
        }
    
        button.btn.btn-dark>a {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    
    
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('sign-in.css') }}" rel="stylesheet">
    <style>
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
    <body>
        <header>
            <div class="headerCol">
                <div class="container-fluid-custom">
                    <div class="customrow customg-2 customalign-items-center">
                        <div class="customcol-auto">
                            <div class="logoCol">
                                <a href="{{ route('home') }}"><img src="{{ URL::asset('images/logo@3x.png') }}"
                                        alt="..." class="logoImg"></a>
                            </div>
                        </div>
                        <div class="customcol">
                            <div class="customrow customg-0 customalign-items-center">
                                <div class="customcol">
                                    <div class="navigationColMain">
                                        <div class="menuCol">
                                            <ul>
                                                <li><a href="javascript:void(0)">Cerca</a></li>
                                                <li><a href="javascript:void(0)">Come Funziona</a></li>
                                                <li><a href="javascript:void(0)">Sei un Hostess/Modella?</a></li>
                                                <li class="d-lg-none"><a href="{{ route('login') }}">Login</a></li>
                                                <li class="d-lg-none"><a href="{{ route('register') }}">Sign up free</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="customcol-auto">
                                    <div class="customrow customg-2 customalign-items-center d-lg-none">
                                        <div class="customcol-auto">
                                            <div class="langCol">
                                                <span class="selectedLang"><img src="images/Italy-flag.svg"
                                                        alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img src="images/Italy-flag.svg"
                                                                alt="..."></a></li>
                                                    <li><a href="javascript:void(0)"><img src="images/Italy-flag.svg"
                                                                alt="..."></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="customcol-auto">
                                            <div class="menuToggle">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="headerRightCol d-none d-lg-block">
                                        <li><a style="color:black;" href="{{ route('login') }}">Login</a></li>
                                        <li>
                                            <div class="langCol">
                                                <span class="selectedLang"><img
                                                        src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                        alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                                alt="..."></a></li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                                alt="..."></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="{{ route('register') }}" class="signupbtn signupbtnDark">Sign up free</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="menuBackdrop"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerSpace"></div>
        </header>