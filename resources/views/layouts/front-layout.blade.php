<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wostess</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
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
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li>
                                            <div class="langCol">
                                                <span class="selectedLang"><img
                                                        src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                        alt="..."></span>
                                                <ul class="langDD">
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                                alt="..."></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><img
                                                                src="{{ URL::asset('images/Italy-flag.svg') }}"
                                                                alt="..."></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="{{ route('register') }}" class="btn btnDark">Sign up free</a></li>
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