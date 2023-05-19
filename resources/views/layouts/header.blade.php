<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        
        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
                crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />

        {{-- Added by Dev --}}
        <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
            integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        {{-- end --}}
        <link rel="stylesheet" href="{{ URL::asset('css/style_header.css') }}">
        {{-- <script src="https://js.stripe.com/v3/"></script>
        <script src="{{URL::to('../stripe-sample-code/public/checkout.js')}}" defer></script> --}}
        

    </head>
    <style>
        .buyCredits {
        text-align: center;
        font-weight: bold;
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
            /* min-width: 50px; */
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

        .offcanvas-body a, span, .text-end>a, button.btn.btn-dark>a {
            font-family: 'Poppins', sans-serif;
        }

        .form-check.py-2 span {
            font-size: 14px;
        }

        .form-control {
            border: 1px solid #777471 !important;
        }

        .fa-user {
        color:#333;
        text-decoration: none !important;
        }
        
        .fa-comments {
        color: grey;
        text-decoration: none !important;
        }
        .fa-comments:hover {
        color:grey;
        }
        
        .a-link:hover {
        text-decoration: none;
        color: #000;
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
    
        .fa-user {
            color: #333;
            text-decoration: none !important;
        }
    
        .fa-comments {
            color: grey;
            text-decoration: none !important;
            /* font-size: 24px !important; */
        }
    
        .fa-comments:hover {
            color: grey;
        }
    
        .a-link:hover {
            text-decoration: none;
            color: #000;
        }
    
        a.fa-comments {
            position: relative;
            font-size: 1.5em;
            color: grey;
            cursor: pointer;
        }
    
        .ModalbuttonGreen {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 1px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 5%;
            /* margin-left: 3%; */
            /* margin-right: 5% !important; */
            width: 100% !important;
            cursor: pointer;
        }
    
        .ModalbuttonPink {
            background-color: #de2352;
            border: none;
            color: white;
            padding: 16px 1px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 5%;
            /* margin-left: 3%; */
            /* margin-right: 5% !important; */
            width: 100% !important;
            cursor: pointer;
        }
    
        .ModalbuttonOrange {
            background-color: #f39b03;
            border: none;
            color: white;
            padding: 16px 1px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 5%;
            /* margin-left: 3%; */
            /* margin-right: 5% !important; */
            width: 100% !important;
            cursor: pointer;
        }
    
        .logoImg1 {
            height: 50%;
            width: 42%;
            margin-left: 30%;
            margin-bottom: 5%;
            padding-top: 5%;
        }
    
        /* The Modal (background) */
        .modal1 {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }
    
        /* Modal Content */
        .modal-content1 {
            background-color: #fefefe;
            margin-top: 10%!important;
            margin: auto;
            padding: 19px;
            border: 1px solid #888;
            width: 25%;
        }
    
        /* The Close Button */
        .close1,.close-payment-modal {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
    
        .close1:hover,
        .close1:focus
        ,.close-payment-modal:hover,
        .close-payment-modal:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content1 {
            background-color: #fefefe;
            margin-top: 10%!important;
            margin: auto;
            padding: 19px;
            border: 1px solid #888;
            width: 25%;
        }
    </style>

    <style>
        .alert-success {
        padding: 20px;
        /* background-color: green; */
        color: green;
        }

        .alert-error {
            padding: 20px;
            /* background-color: green; */
            color: red;
        }
        
        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }
        
        .closebtn:hover {
        color: black;
        }
        @media (max-width:767px) {
            .modal-content1 {
                width: 100%;
            }
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
                                                <li><a href="{{ route('hostess-search-result') }}">{{__('messages.Near')}}</a></li>
                                                <li><a href="{{ route('how-does-it-work') }}">{{__('messages.How_does_it_work')}}</a></li>
                                                {{-- <li><a href="javascript:void(0)">{{__('messages.are_you_a_hostess_model')}}</a></li> --}}
                                                @if (Auth::id() != null || Auth::id() != '')
                                                @if(Auth::user()->user_type == 'user')
                                                <li class="d-lg-none"><a href="{{ route('userChat') }}">{{__('messages.chat')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('profile.edit') }}">{{__('messages.My Profile')}}</a></li>
                                                <li class="d-lg-none"><a href="#">{{__('messages.Credits')}}: {{@Auth::user()->credit != null || @Auth::user()->credit != '' ? @Auth::user()->credit : 0 }}</a></li>
                                                <li class="d-lg-none"><a href="#" id="buyCredits">{{__('messages.Buy Credits')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('user.logout') }}">{{ __('messages.Logout') }}</a></li>
                                                @else 
                                                <li class="d-lg-none"><a href="{{ route('userChat') }}">Chat</a></li>
                                                <li class="d-lg-none"><a href="{{ route('hostess_profile') }}">{{__('messages.My Profile')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('user.logout') }}">{{ __('messages.Logout') }}</a></li>
                                                @endif 
                                                @else
                                                <li class="d-lg-none"><a href="{{ route('login') }}">{{__('messages.Login')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('register') }}">{{__('messages.Sign up free')}}</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="customcol-auto">
                                    <div class="customrow customg-2 customalign-items-center d-lg-none">
                                        <div class="customcol-auto">
                                            {{-- <div class="langCol">
                                            <span class="selectedLang"><img src="{{ URL::asset('images/Italy-flag.svg') }}"
                                            alt="..."></span>
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
                                                <span class="selectedLang"><img
                                                        src="{{ URL::asset('assets/images/1.png') }}" /></span>
                                                @elseif(app()->getLocale() == 'it')
                                                <span class="selectedLang"><img
                                                        src="{{ URL::asset('images/Italy-flag.svg') }}" /></span>
                                                @elseif(app()->getLocale() == 'sp')
                                                <span class="selectedLang"><img
                                                        src="{{ URL::asset('assets/images/3.png') }}" /></span>
                                                @endif
                                            </a>
                                            <div class="dropdown-content langCol">
                                                {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
                                                @php
                                                @$i = 1;
                                                @endphp
                                                @foreach (config('app.available_locales') as $locale)
                                                <span class="selectedLang">
                                                    <x-nav-link :href="route(
                                                                                                    \Illuminate\Support\Facades\Route::currentRouteName(),
                                                                                                    ['locale' => $locale],
                                                                                                )"
                                                        :active="app()->getLocale() == $locale">
                                                        <img src="{{ URL::asset('assets/images/' . @$i . '.png') }}"
                                                            height="70px" width="70px" />
                                                    </x-nav-link>
                                                </span>
                                                @php
                                                @$i++;
                                                @endphp
                                                @endforeach
                                            </div>
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
                                    @if (Auth::id() != null || Auth::id() != '')
                                    @if(Auth::user()->user_type == 'user')
                                    <li>
                                        <div class="dropdown langCol">
                                            {{-- <span style="color: #000000;" class="">{{ __('messages.Welcome') }}, {{ Auth::user()->name }}</span> --}}
                                            <a class="a-link"><i class="fas fa-user"></i></a>
                                            <div class="dropdown-content langCol">
                                                <span class="dropdown-profile">
                                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{__('messages.My Profile')}}</a>
                                                    <a class="dropdown-item" href="#">{{__('messages.Credits')}}: {{@Auth::user()->credit != null || @Auth::user()->credit != '' ? @Auth::user()->credit : 0 }}</a>
                                                    <a class="dropdown-item" href="javascript::void(0)" id="buyCreditsMobile">{{__('messages.Buy Credits')}}</a>
                                                    <a href="{{ route('user.logout') }}">{{ __('messages.Logout') }}</a>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('userChat') }}" class="fas fa-comments">
                                            {{-- <span class="fas fa-comment"></span> --}}
                                            {{-- <span class="num">2</span> --}}
                                        </a>
                                    </li>
                                    @else
                                    <li>
                                        <div class="dropdown langCol">
                                            <span style="color: #000000;" class="">{{ __('messages.Welcome') }}, {{ Auth::user()->name }}</span>
                                            <div class="dropdown-content langCol">
                                                <span class="dropdown-profile">
                                                    <a class="dropdown-item" href="{{ route('hostess_profile') }}">{{__('messages.My Profile')}}</a>
                                                    <a href="{{ route('user.logout') }}">{{ __('messages.Logout') }}</a>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('userChat') }}" class="fas fa-comments">
                                            {{-- <span class="fas fa-comment"></span> --}}
                                            {{-- <span class="num">2</span> --}}
                                        </a>
                                    </li>
                                    @endif
                                    @else
                                    <li><a style="color:black;" href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                                    @endif
                                    <li>
                                        {{-- <div class="langCol">
                                            <span class="selectedLang"><img
                                                    src="{{ URL::asset('images/Italy-flag.svg') }}"
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
                                    <span class="selectedLang"><img
                                            src="{{ URL::asset('assets/images/1.png') }}" /></span>
                                    @elseif(app()->getLocale() == 'it')
                                    <span class="selectedLang"><img
                                            src="{{ URL::asset('images/Italy-flag.svg') }}" /></span>
                                    @elseif(app()->getLocale() == 'sp')
                                    <span class="selectedLang"><img
                                            src="{{ URL::asset('assets/images/3.png') }}" /></span>
                                    @endif
                                </a>
                                <div class="dropdown-content langCol">
                                    {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
                                    @php
                                    @$i = 1;
                                    @endphp
                                    @foreach (config('app.available_locales') as $locale)
                                    <span class="selectedLang">
                                        <x-nav-link :href="route(
                                                            \Illuminate\Support\Facades\Route::currentRouteName(),
                                                            ['locale' => $locale],
                                                        )" :active="app()->getLocale() == $locale">
                                            <img src="{{ URL::asset('assets/images/' . @$i . '.png') }}" height="70px"
                                                width="70px" />
                                        </x-nav-link>
                                    </span>
                                    @php
                                    @$i++;
                                    @endphp
                                    @endforeach
                                </div>
                            </div>
                            </li>
                            @if (Auth::id() == null || Auth::id() == '')
                            <li><a href="{{ route('register') }}" class="signupbtn signupbtnDark">{{__('messages.Sign up free')}}</a></li>
                            @endif
                            </ul>

                        </div>
                    </div>
                    <div class="menuBackdrop"></div>
                </div>
            </div>
            </div>
            </div>
            <div class="headerSpace"></div>
            <!-- The Modal Buy Credit Modal-->
            <div id="lowCreditModal1" class="modal1">
            
                <!-- Modal content -->
                <div class="modal-content1 mb-20" style="width: 30% !important;">
                    <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1" height="10%"
                        width="10%">
                    <span class="close1">&times;</span>
                    {{-- <h3><b style="margin-left: 10%;margin-left: 23%;">You don't have enough credits.</b></h3> --}}
                    <p class="buyCredits">{{__('messages.Buy your credits now')}}:</p>
                    {{-- <form action="{{ route('confirmMsg') }}" method="post"> --}}
                    {{-- @csrf --}}
                    {{-- <button class="ModalbuttonPink"><strong>Buy {{@$user->credit}} credits (for 3 €) and start the
                    chat</strong></button> --}}
                    {{-- </form> --}}
            
                    <input type="hidden" name="no_of_credit" value="{{@$manageCredit->no_of_credit}}">
                    <input type="hidden" name="euro_amount" value="{{@$manageCredit->euro_amount}}">
                    <button class="ModalbuttonOrange" onclick="showPaymentModal({{@$manageCredit->euro_amount}})"><strong>{{__('messages.Buy a pack of')}}
                            {{@$manageCredit->no_of_credit}} {{__('messages.credits for')}} €{{@$manageCredit->euro_amount}}
                            ({{__('messages.save 20%')}}!)</strong></button>
            
                </div>
            
            </div>
            
            {{-- payment modal --}}
            <div id="paymentModal" class="modal1">
                <!-- Modal content -->
                <div class="modal-content1 mb-20">
                    <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1" height="10%"
                        width="10%">
                    <span class="close-payment-modal">&times;</span>
                    <h3><b style="margin-left: 10%;margin-left: 23%;">{{__('messages.You are buying')}} <span
                                id="credits_count"></span> {{__('messages.credits')}} : </b> </h3>
                    <h3><b style="margin-left: 10%;margin-left: 23%;">{{__('messages.Total')}} : €<span
                                id="credits_amount"></span></b></h3>
                    {{-- payment form --}}
                    <form id="payment-form">
                        @csrf
                        <div id="link-authentication-element">
                            <!--Stripe.js injects the Link Authentication Element-->
                        </div>
                        <div id="payment-element">
                            <!--Stripe.js injects the Payment Element-->
                        </div>
                        <button id="submit" class="ModalbuttonGreen Modalbutton">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text"><strong>{{__('messages.Pay Now')}}</strong></span>
                        </button>
            
                        <div id="payment-message" class="hidden"></div>
                        <div id="payment-details"></div>
                    </form>
                    {{-- payment form --}}
                    {{-- <form action="{{ route('confirmMsg') }}" method="post"> --}}
                    {{-- @csrf --}}
                    {{-- <button class="ModalbuttonPink Modalbutton"><strong>Buy {{@$user->credit}} credits (for 3 €) and start the
                    chat</strong></button> --}}
                    {{-- </form> --}}
                    {{-- <button class="ModalbuttonOrange Modalbutton"><strong>Buy a pack of 100 credits for €80 (save 20%!)</strong></button> --}}
                </div>
            </div>
            {{-- payment modal --}}
            <script src="{{ URL::asset('js/script.js') }}"></script>
            <script>
                $(document).ready(function () {
                            $('#buyCredits,#buyCreditsMobile').click(function(){
                                $("#lowCreditModal1").show();
                                $(".close1").click(function(){
                                    $("#lowCreditModal1").hide();
                                });
                            });
                        });
            
                        function showPaymentModal(val) {
                            $("#lowCreditModal1").hide();
                            db_no_of_credit = $("input[name='no_of_credit']").val();
                            $("#credits_count").html(db_no_of_credit);
                            
                            db_euro_amount = $("input[name='euro_amount']").val();
                            $("#credits_amount").html(db_euro_amount);

                            localStorage.setItem("credit_amount",val*100);
                            localStorage.setItem("credits",db_no_of_credit);
                            $("#paymentModal").show();
                            
                        }
                        $(".close-payment-modal").click(function(){
                            $("#paymentModal").hide();
                        });
            </script>
        </header>