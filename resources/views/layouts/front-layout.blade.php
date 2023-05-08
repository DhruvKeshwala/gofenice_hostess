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
        <style>
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
        .fa-comments {
        color: grey;
        text-decoration: none !important;
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
                                                <li><a href="javascript:void(0)">{{__('messages.Near')}}</a></li>
                                                <li><a href="javascript:void(0)">{{__('messages.How_does_it_work')}}</a></li>
                                                <li><a href="javascript:void(0)">{{__('messages.are_you_a_hostess_model')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('login') }}">{{__('messages.Login')}}</a></li>
                                                <li class="d-lg-none"><a href="{{ route('register') }}">{{__('messages.Sign up free')}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="row g-2 align-items-center d-lg-none">
                                        <div class="col-auto">
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
                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                                                        <a class="dropdown-item" href="#">Credits: {{@Auth::user()->credit != null || @Auth::user()->credit != '' ? @Auth::user()->credit : 0 }}</a>
                                                        <a class="dropdown-item" href="javascript::void(0)" id="buyCredits">Buy Credits</a>
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
                                                        <a class="dropdown-item" href="{{ route('hostess_profile') }}">My Profile</a>
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
                                <li><a href="{{ route('register') }}" class="signupbtn signupbtnDark">Sign up free</a></li>
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
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{ URL::asset('js/script.js') }}"></script>
    </body>

</html>