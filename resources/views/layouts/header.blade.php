<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.108.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>

        {{-- Added by Dev --}}
        <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
            integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        {{-- end --}}

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
                min-width: 160px;
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
                font-family: 'Poppins';
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
            .text-end > a {
                font-family: 'Montserrat', sans-serif;
            }
            button.btn.btn-dark > a {
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
    </head>

    <body>
        <header class="p-1">
            <nav class="navbar navbar-dark bg-dark fixed-top"
                style="background-color:#FFFFFF!important;padding: 0px !important;">
                <div class="container-fluid">
                    <a style="text-decoration: none;" class="d-none d-lg-block" data-bs-toggle="offcanvas"
                        href="#offcanvasResponsive" role="button" aria-controls="offcanvasResponsive">
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="#"><img src="{{ URL::asset('upload/wostess.png') }}" style="width: 200px;" /></a>
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
                            {{-- <img src="{{ URL::asset('assets/images/image_2023_03_21T13_45_50_816Z.png') }}"
                            style="width: 150px;" /> --}}
                            <h1 style="color: #c98e49;">Hostess</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#offcanvasResponsive" aria-label="Close"
                                style="background-color: #ffffff;"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul style="margin: auto; background-color: white;"
                                class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 d-block d-lg-inline-flex">
                                <li><a href="#" class="nav-link px-4"
                                        style="font-weight:bold!important;font-size: 18px;">{{__('messages.Explore')}}</a></li>
                                <li><a href="#" class="nav-link px-4"
                                        style="font-weight:bold!important;font-size: 18px;">{{__('messages.Plans')}}</a></li>
                                <li><a href="#" class="nav-link px-4"
                                        style="font-weight:bold!important;font-size: 18px;">{{__('messages.Upload')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    @if (Auth::id() != null || Auth::id() != '')
                    <div class="text-end">
                        <span style="color: #000000;" class="">{{__('messages.Welcome')}}, {{ Auth::user()->name }} |</span>
                        <a href="{{ route('user.logout') }}" style="color: #000000;" class="">{{__('messages.Logout')}}</a>
                    </div>
                    @else
                    <div class="text-end" style="padding-right:50px;">
                        <a href="{{ route('login') }}"
                            style="color: #ED4B60; font-size: 14px;font-weight:bold!important;text-decoration: none;"
                            class="">{{__('messages.Login')}} </a>

                        {{-- <img src="{{ url('assets/images/italy.png') }}" width="60px" height="60px" alt="Image" /> --}}
                        {{-- <div class="col-md-4"> --}}
                            {{-- working properly <select class="changeLang" id="changeLang" onchange="change_language()">
                                @foreach(config('app.available_locales') as $locale)
                                <option value="{{$locale}}" {{ app()->getLocale() == $locale ? 'selected' : '' }} redirectroute="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])}}">
                                    {{ strtoupper($locale) }}</option>
                                @endforeach
                            </select> --}}

                            {{-- <select class="changeLang" id="changeLang" onchange="change_language()">
                                @foreach(config('app.available_locales') as $locale)
                                <option value="{{$locale}}" {{ app()->getLocale() == $locale ? 'selected' : '' }}
                                    redirectroute="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])}}">
                                    
                                </option>
                                @endforeach
                            </select> --}}
                            <div class="dropdown">
                                <a href="javascript:;void(0)">@if(app()->getLocale() == 'en')
                                    <img src="{{URL::asset('assets/images/1.png')}}" height="70px" width="70px" />
                                    @elseif(app()->getLocale() == 'it')
                                        <img src="{{URL::asset('assets/images/2.png')}}" height="70px" width="70px" />
                                    @elseif(app()->getLocale() == 'sp')
                                        <img src="{{URL::asset('assets/images/3.png')}}" height="70px" width="70px" />
                                    @endif
                                </a>
                                <div class="dropdown-content">
                                    {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
@php
                                        @$i = 1;
@endphp
                                    @foreach(config('app.available_locales') as $locale)
                                    <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])"
                                        :active="app()->getLocale() == $locale">
                                        <img src="{{URL::asset('assets/images/' . @$i . '.png')}}" height="70px" width="70px" />
                                    </x-nav-link>
@php 
                                        @$i++ 
@endphp
                                    @endforeach
                                </div>
                            </div>

                            {{-- @foreach(config('app.available_locales') as $locale)
                            <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])"
                                :active="app()->getLocale() == $locale">
                                {{ strtoupper($locale) }}
                            </x-nav-link>
                            @endforeach
                            <x-dropdown-link align="right" width="48"></x-dropdown-link> --}}

                           

                        {{-- </div> --}}
                        <button type="button" class="btn btn-dark"><a href="{{ route('register') }}"
                                style="color: white;font-size: 14px;text-decoration: none;" class="">{{__('messages.Sign up free')}}</a></button>
                        {{-- <a href="{{ route('register') }}" style="color: #000000;" class="">Sign up free</a> --}}
                    </div>
                    @endif
                </div>
            </nav>
            <script type="text/javascript">
                function change_language()
                {
                    var redirectroute = $('#changeLang').find(":selected").attr("redirectroute");
                    //window.location = $('#changeLang').find(":selected").attr("redirectroute");
                    // alert(redirectroute);
                    location.replace($('#changeLang').find(":selected").attr("redirectroute"));
                }
            </script>
        </header>