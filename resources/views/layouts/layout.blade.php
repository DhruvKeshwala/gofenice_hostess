<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/user/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/61ebb60581.js" crossorigin="anonymous"></script>
        @yield('header')
        <style>
            a.fa-comments {
            position: relative;
            font-size: 2em;
            color: grey;
            cursor: pointer;
            }
            span.fa-comment {
            position: absolute;
            font-size: 0.6em;
            top: -4px;
            color: red;
            right: -64px;
            }
            span.num {
            position: absolute;
            font-size: 0.3em;
            top: 1px;
            color: #fff;
            right: 2px;
            left: 44px;
            }
            .dropbtn1 {
                background-color: #fff;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }
        
            .dropdown1 {
                position: relative;
                display: inline-block;
            }
        
            .dropdown-content1 {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }
        
            .dropdown-content1 a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
        
            .dropdown-content1 a:hover {
                background-color: #f1f1f1
            }
        
            .dropdown1:hover .dropdown-content1 {
                display: block;
            }
        
            .dropdown1:hover .dropbtn1 {
                background-color: #3e8e41;
            }
        </style>
        <style>
            .jGrowl .changeCount {
            background-color: #337ab7;
            }
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            }
        
            /* 
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
        
            .dropdown-content a:hover {
                background-color: #f1f1f1
            } */
        
            .dropdown:hover .dropdown-content {
                display: block;
            }
        
            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="headerCol">
                <div class="container-fluid">
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            <div class="logoCol">
                                <a href="{{ route('home') }}"><img src="{{ URL::asset('images/logo@3x.png') }}" alt="..."
                                        class="logoImg"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <div class="navigationColMain">
                                        <div class="menuCol">
                                            <ul>
                                                <li><a href="javascript:void(0)">{{ __('messages.Fence')}}</a></li>
                                                <li><a href="javascript:void(0)">{{ __('messages.How does it work')}}</a></li>
                                                <li><a href="javascript:void(0)">{{ __('messages.Are you a Hostess/Model?')}}</a></li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="row g-2 align-items-center d-lg-none">
                                        <div class="col-auto">
                                            {{-- <div class="langCol">
                                                <span class="selectedLang"><img src="images/Italy-flag.svg" alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img src="images/Italy-flag.svg"
                                                                alt="..."></a></li>
                                                    <li><a href="javascript:void(0)"><img src="images/Italy-flag.svg"
                                                                alt="..."></a></li>
                                                </ul>
                                            </div> --}}
                                            <div class="dropdown langCol">
                                                <a href="javascript:;void(0)">
                                                    @if (app()->getLocale() == 'en')
                                                    <span class="selectedLang"><img src="{{ URL::asset('assets/images/1.png') }}" /></span>
                                                    @elseif(app()->getLocale() == 'it')
                                                    <span class="selectedLang"><img src="{{ URL::asset('images/Italy-flag.svg') }}" /></span>
                                                    @elseif(app()->getLocale() == 'sp')
                                                    <span class="selectedLang"><img src="{{ URL::asset('assets/images/3.png') }}" /></span>
                                                    @endif
                                                </a>
                                                <div class="dropdown-content langCol">
                                                    {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
                                                    @php
                                                    @$i = 1;
                                                    @endphp
                                                    @foreach (config('app.available_locales') as $locale)
                                                    <span class="selectedLang">
                                                        <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(),['locale' => $locale],)" :active="app()->getLocale() == $locale">
                                                            <img src="{{ URL::asset('assets/images/' . @$i . '.png') }}" height="70px" width="70px" />
                                                        </x-nav-link>
                                                    </span>
                                                    @php
                                                    @$i++;
                                                    @endphp
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="menuToggle">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="headerRightCol d-none d-lg-block">
                                        @if (Auth::id() == null || Auth::id() == '')
                                        <li><a href="{{ route('login') }}">{{__('messages.Login')}}</a></li>
                                        <li><a href="{{ route('register') }}">{{__('messages.Sign up free')}}</a></li>
                                        @else
                                        <li>
                                            <div class="dropdown1">
                                                <a class=""><i class="fas fa-user"></i></a>
                                                <div class="dropdown-content1">
                                                    <a href="{{ route('profile.edit') }}">My Profile</a>
                                                    <a href="#">Credits:
                                                        {{@Auth::user()->credit != null || @Auth::user()->credit != '' ? @Auth::user()->credit : 0 }}</a>
                                                    <a href="javascript::void(0)" id="buyCredits">Buy Credits</a>
                                                    <a href="{{ route('user.logout') }}">{{ __('messages.Logout') }}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="fas fa-comments">
                                                {{-- <span class="fas fa-comment"></span> --}}
                                                <span class="num">2</span>
                                            </a>
                                        </li>
                                        @endif
                                        <li>
                                            {{-- <div class="langCol">
                                                <span class="selectedLang"><img src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                        alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}" alt="..."></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}" alt="..."></a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                            <div class="dropdown langCol">
                                                <a href="javascript:;void(0)">
                                                    @if (app()->getLocale() == 'en')
                                                    <span class="selectedLang"><img src="{{ URL::asset('assets/images/1.png') }}" /></span>
                                                    @elseif(app()->getLocale() == 'it')
                                                    <span class="selectedLang"><img src="{{ URL::asset('images/Italy-flag.svg') }}" /></span>
                                                    @elseif(app()->getLocale() == 'sp')
                                                    <span class="selectedLang"><img src="{{ URL::asset('assets/images/3.png') }}" /></span>
                                                    @endif
                                                </a>
                                                <div class="dropdown-content langCol">
                                                    @php
                                                    @$i = 1;
                                                    @endphp
                                                    @foreach (config('app.available_locales') as $locale)
                                                    <span class="selectedLang">
                                                        <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(),['locale' => $locale],)"
                                                            :active="app()->getLocale() == $locale">
                                                            <img src="{{ URL::asset('assets/images/' . @$i . '.png') }}" height="70px" width="70px" />
                                                        </x-nav-link>
                                                    </span>
                                                    @php
                                                    @$i++;
                                                    @endphp
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        {{-- <li><a href="{{ route('register') }}" class="btn btnDark">Sign up free</a></li> --}}
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
        @yield('content')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        {{-- For Message display --}}
        <link rel="stylesheet" type="text/css"
            href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.js"></script>
        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
        @yield('footer')
        <!-- The Modal Buy Credit Modal-->
        <div id="lowCreditModal-top" class="modal">
        
            <!-- Modal content -->
            <div class="modal-content mb-20">
                <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1" height="10%"
                    width="10%">
                <span class="close">&times;</span>
                {{-- <h3><b style="margin-left: 10%;margin-left: 23%;">You don't have enough credits.</b></h3> --}}
                <p style="margin-left: 10%;margin-left: 35%;">Buy your credits now:</p>
                {{-- <form action="{{ route('confirmMsg') }}" method="post"> --}}
                {{-- @csrf --}}
                {{-- <button class="ModalbuttonPink"><strong>Buy {{@$user->credit}} credits (for 3 €) and start the
                        chat</strong></button> --}}
                {{-- </form> --}}
        
                <button class="ModalbuttonOrange"><strong>Buy a pack of 100 credits for €80 (save 20%!)</strong></button>
        
            </div>
        
        </div>
        <script src="{{ URL::asset('js/script.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#buyCredits').click(function(){
                    $("#lowCreditModal-top").show();
                    $(".close").click(function(){
                        $("#lowCreditModal-top").hide();
                    });
                });
            });
        </script>
    </body>

</html>