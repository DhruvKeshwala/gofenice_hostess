<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wostess</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{URL::to('../stripe-sample-code/public/checkout.js')}}" defer></script>
        <style>
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
        a.fa-comments {
            position: relative;
            font-size: 1.5em;
            color: grey;
            cursor: pointer;
        }
        .fa-comments:hover {
            color:grey;
        }
        .dropdown:hover .dropdown-contentlang {
            width: 40px !important;
        }

        .dropdown-contentlang a {
            width: 40px !important;
            height: 40px !important;
        }

.dropdown-contentlang a {
    padding: 6px 6px !important;
}
.dropdown-contentlang{
    min-height: 100px !important;
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

    .modal1 {
        display: none;
        position: fixed;
        z-index: 99999;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

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
    .close1:focus,.close-payment-modal:hover, .close-payment-modal:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .direct-chat-btn {
        margin-bottom: 15px;
    }

    

            .dropdown-contentlang a {
            padding: 6px 6px !important;
            }
            .dropdown-contentlang{
            min-height: 100px !important;
            }
            .signupbtnDark {
            background-color: var(--black);
            color: var(--white) !important;
            }
            .signupbtn {
            font-size: 14px;
            font-weight: 600;
            border-radius: 5px;
            padding: 12px 20px;
            }

            @media (max-width:767px) {
                .modal-content1 {
                    width: 100%;
                }
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
                                <a href="{{ route('home') }}"><img src="{{ URL::asset('images/logo@3x.png') }}"
                                        alt="..." class="logoImg"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <div class="navigationColMain">
                                        <div class="menuCol">
                                            <ul>
                                                <li><a href="{{ route('hostess-search-result') }}">{{__('messages.Near')}}</a></li>
                                                <li><a href="javascript:void(0)">{{__('messages.How_does_it_work')}}</a></li>
                                                <li><a href="{{ route('login') }}">{{__('messages.are_you_a_hostess_model')}}</a></li>
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
                                                <div class="dropdown-content dropdown-contentlang langCol">
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
                                        @if (Auth::id() != null || Auth::id() != '')
                                        @if(Auth::user()->user_type == 'user')
                                        <li>
                                            <div class="dropdown langCol">
                                                <a class="a-link"><i class="fas fa-user"></i></a>
                                                <div class="dropdown-content langCol" style="width:140px;">
                                                    <span class="dropdown-profile">
                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{__('messages.My Profile')}}</a>
                                                        <a class="dropdown-item" href="javascript:;void(0)">{{__('messages.Credits')}}: {{@Auth::user()->credit != null || @Auth::user()->credit != '' ? @Auth::user()->credit : 0 }}</a>
                                                        <a class="dropdown-item" href="javascript:;void(0)" id="buyCreditsMobile">{{__('messages.Buy Credits')}}</a>
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
                                    <div class="dropdown-content dropdown-contentlang langCol">
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
        </header>
        <!-- The Modal Buy Credit Modal-->
        <div id="lowCreditModal1" class="modal1">
        
            <!-- Modal content -->
            <div class="modal-content1 mb-20">
                <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1" height="10%"
                    width="10%">
                <span class="close1">&times;</span>
                {{-- <h3><b style="margin-left: 10%;margin-left: 23%;">You don't have enough credits.</b></h3> --}}
                <p style="margin-left: 10%;margin-left: 35%;">{{__('messages.Buy your credits now')}}:</p>
                {{-- <form action="{{ route('confirmMsg') }}" method="post"> --}}
                {{-- @csrf --}}
                {{-- <button class="ModalbuttonPink"><strong>Buy {{@$user->credit}} credits (for 3 €) and start the
                chat</strong></button> --}}
                {{-- </form> --}}
        
                <button class="ModalbuttonOrange" onclick="showPaymentModal(80)"><strong>{{__('messages.Buy a pack of 100 credits for €80 (save 20%!)')}}</strong></button>
        
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
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{ URL::asset('js/script.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#buyCredits, #buyCreditsMobile').click(function(){
                    $("#lowCreditModal1").show();
                    $(".close1").click(function(){
                        $("#lowCreditModal1").hide();
                    });
                });
            });
                    
            function showPaymentModal(val) {
                $("#lowCreditModal1").hide();
                if (val == '3') {
                    $("#credits_count").html(3);
                }else{
                    $("#credits_count").html(100);
                }
                $("#credits_amount").html(val);
                localStorage.setItem("credit_amount",val*100);
                $("#paymentModal").show();
                
            }
            $(".close-payment-modal").click(function(){
                $("#paymentModal").hide();
            });
            localStorage.removeItem("payment_response");
            // localStorage.setItem("credit_amount",50);
        </script>
    </body>

</html>