<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/user/css/style.css') }}">
        @yield('header')
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
                min-width: 100px;
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
    </head>

    <body>
        <header>
            <div class="headerCol">
                <div class="container-fluid">
                    <div class="row g-2 align-items-center">
                        <div class="col-auto">
                            <div class="logoCol">
                                <a href="index.html"><img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg"></a>
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
                                                @if (Auth::id() != null || Auth::id() != '')
                                                    <li class="d-lg-none">
                                                        <span style="color: #000000;" class="">{{__('messages.Welcome')}}, {{ Auth::user()->name }} |</span>
                                                        <a href="{{ route('user.logout') }}" style="color: #000000;" class="">{{__('messages.Logout')}}</a></li>
                                                @else
                                                    <li class="d-lg-none"><a href="{{ route('login') }}">{{__('messages.Login')}}</a></li>
                                                    <li class="d-lg-none"><a href="{{ route('register') }}">{{__('messages.Sign up free')}}</a></li>
                                                @endif
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="row g-2 align-items-center d-lg-none">
                                        <div class="col-auto">
                                            <div class="langCol">
                                                <div class="dropdown">
                                                <a href="javascript:;void(0)">
                                                    @if(app()->getLocale() == 'en')
                                                        <img src="{{URL::asset('assets/images/1.png')}}" height="70px" width="70px" />
                                                    @elseif(app()->getLocale() == 'it')
                                                        <img src="{{URL::asset('assets/images/2.png')}}" height="70px" width="70px" />
                                                    @elseif(app()->getLocale() == 'sp')
                                                        <img src="{{URL::asset('assets/images/3.png')}}" height="70px" width="70px" />
                                                    @endif
                                                </a>
                                                {{-- @dd(route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en', 'id' => \Request::segment(3)])) --}}
                                                <div class="dropdown-content">
                                                    {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
@php
                                                        @$i = 1;
@endphp
                                                    @foreach(config('app.available_locales') as $locale)
                                                        <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale, 'id' => \Request::segment(3)])"
                                                            :active="app()->getLocale() == $locale">
                                                            <img src="{{URL::asset('assets/images/' . @$i . '.png')}}" height="70px" width="70px" />
                                                        </x-nav-link>
@php
                                                        @$i++
@endphp
                                                    @endforeach
                                                </div>
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
                                        @if(Auth::id() == null || Auth::id() == '')
                                            <li><a href="{{ route('login') }}">{{ __('messages.Login') }}</a></li>
                                        @else
                                            <span>{{__('messages.Welcome')}}, {{ Auth::user()->name }} |</span>
                                            <a href="{{ route('user.logout') }}">{{__('messages.Logout')}}</a></li>
                                        @endif
                                        <li>
                                            
                                            <div class="dropdown">
                                                <a href="javascript:;void(0)">
                                                    @if(app()->getLocale() == 'en')
                                                        <img src="{{URL::asset('assets/images/1.png')}}" height="70px" width="70px" />
                                                    @elseif(app()->getLocale() == 'it')
                                                        <img src="{{URL::asset('assets/images/2.png')}}" height="70px" width="70px" />
                                                    @elseif(app()->getLocale() == 'sp')
                                                        <img src="{{URL::asset('assets/images/3.png')}}" height="70px" width="70px" />
                                                    @endif
                                                </a>
                                                {{-- @dd(route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en', 'id' => \Request::segment(3)])) --}}
                                                <div class="dropdown-content">
                                                    {{-- <x-nav-link href="#"><img src="https://img.icons8.com/color/256/brazil-circular.png" height="100%" width="100%" /></a> --}}
@php
                                                        @$i = 1;
@endphp
                                                    @foreach(config('app.available_locales') as $locale)
                                                        <x-nav-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale, 'id' => \Request::segment(3)])"
                                                            :active="app()->getLocale() == $locale">
                                                            <img src="{{URL::asset('assets/images/' . @$i . '.png')}}" height="70px" width="70px" />
                                                        </x-nav-link>
@php
                                                        @$i++
@endphp
                                                    @endforeach
                                                </div>
                                            </div>
                                            {{-- <div class="langCol">
                                                <span class="selectedLang"><img src="{{ URL::asset('assets/user/images/Italy-flag.svg') }}"  alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/Italy-flag.svg') }}"  alt="..."></a></li>
                                                    <li><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/Italy-flag.svg') }}"  alt="..."></a></li>
                                                </ul>
                                            </div> --}}
                                        </li>
                                        @if(Auth::id() == null || Auth::id() == '')
                                            <li><a href="{{ route('register') }}" class="btn btnDark">{{__('messages.Sign up free')}}</a></li>
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
        
        @yield('footer')
    </body>

</html>