@include('layouts.header')
<style>
    .row1 {
        margin-top: 100px;
    }

    .row2 {
        margin-top: 40px;
    }

    .red-color {
        color: rgb(235, 156, 193);
    }

    .favorites {
        padding-right: 5.5rem !important;
        padding-left: 1.5rem !important;
        margin-top: 15px;
    }

    .px-4 {
        padding-right: 2.5rem !important;
        padding-left: 1.5rem !important;
    }

    .btn-lg {
        --bs-btn-padding-y: 1.2rem;
        --bs-btn-padding-x: 14rem;
        --bs-btn-font-size: 1.25rem;
        --bs-btn-border-radius: 0.5rem;
    }

    .btn-color {
        background-image: linear-gradient(90deg, #fc00ff, #00dbde);
        color: white;
    }

    .btn-second {
        --bs-btn-color: black;
        /* --bs-btn-bg: #0d6efd; */
        --bs-btn-border-color: #fda90d;
        /* --bs-btn-hover-color: black; */
        /* --bs-btn-hover-bg: #0b5ed7; */
        /* --bs-btn-hover-border-color: #0a58ca; */
        /* --bs-btn-focus-shadow-rgb: 49,132,253; */
        /* --bs-btn-active-color: #fff; */
        /* --bs-btn-active-bg: #0a58ca; */
        /* --bs-btn-active-border-color: #dd9a0a; */
        /* --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); */
        /* --bs-btn-disabled-color: #fff; */
        /* --bs-btn-disabled-bg: #0d6efd; */
        /* --bs-btn-disabled-border-color: #0d6efd; */

    }

    .btn-lg1 {
        --bs-btn-padding-y: 1.2rem;
        --bs-btn-padding-x: 4rem;
        --bs-btn-font-size: 1.25rem;
        --bs-btn-border-radius: 0.5rem;
    }

    .logged-in {
        color: green;
        height: 35px;
        width: 25px;
    }



    h3 {
        position: relative;
        /* font-size: 30px; */
        z-index: 1;
        overflow: hidden;
        /* text-align: center; */
    }

    h3:after {
        position: absolute;
        top: 51%;
        overflow: hidden;
        width: 100%;
        height: 2px;
        content: '\a0';
        background-color: rgba(177, 166, 166, 0.253);
    }

    .search {
        height: 60px;
    }

    .searchicon {
        position: relative;
    }

    .searchicon i {
        position: absolute;
        left: 15px;
        top: 22px;
        color: gray;
    }

    .dot {
        height: 16px;
        width: 16px;
        background-color: #1feb52;
        border-radius: 50%;
        display: inline-block;
    }

    .dot-orange {
        height: 16px;
        width: 16px;
        background-color: #ffa939;
        border-radius: 50%;
        display: inline-block;
    }
</style>

<div class="container-fluid">
    <div class="row row1">

        <div class="col-md-10">
            <div class="searchicon">
                <input class="form-control search mr-sm-1" type="search" placeholder="" aria-label="Search">
                <i class="fa fa-search fa-lg"></i>
            </div>
        </div>
        <div class="col-md-2">
            <h4 class="favorites"><i class='fa fa-heart red-color'></i> Favorites</h4>
        </div>
    </div>
    <div class="offcanvas-body">
        <ul style="margin: auto;"
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 d-block d-lg-inline-flex">
            <li><a href="#" class="nav-link px-4" style="font-weight:bold!important;font-size: 18px;">All</a></li>
            <li><a href="#" class="nav-link px-4" style="font-weight:bold!important;font-size: 18px;">Wing
                    Hostess</a></li>
            <li><a href="#" class="nav-link px-4" style="font-weight:bold!important;font-size: 18px;">Photo
                    Models</a></li>
            <li><a href="#" class="nav-link px-4" style="font-weight:bold!important;font-size: 18px;">New</a></li>
            <li><a href="#" class="nav-link px-4" style="font-weight:bold!important;font-size: 18px;">Online Now
                </a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="row row2">

            <div class="col-md-8">
                <div class="row" style="margin-left: 10px;">
                    <div class="col-md-10">
                        <h4 style="font-weight:bold;display: inline-block">Maddalena,</h4>
                        <h5 style="display: inline-block"> Perugia, 24 anni</h5>
                        @php
                        $to = Carbon\Carbon::now();
                        $from = $user->last_seen;
                        $diff_in_minutes = $to->diffInMinutes($from);
                        @endphp
                        @if(@$diff_in_minutes >= 0 && @$diff_in_minutes <= 10) <p><span class="dot"></span> Last
                            connection:
                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                            online
                            </p>
                        @elseif(@$diff_in_minutes > 10 && @$diff_in_minutes <= 119) <p><span
                                class="dot-orange"></span> Last connection:
                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                            just now
                            </p>
                        @elseif(@$diff_in_minutes >= 120 && @$diff_in_minutes <= 1440) <p>Last connection:
                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                            from a few hours
                            </p>
                        @elseif(@$diff_in_minutes >= 1441 && @$diff_in_minutes <= 2879) <p>Last connection:
                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                            1 day
                            </p>
                        @elseif(@$diff_in_minutes >= 2880)
                        <p>Last connection:
                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                            for a few days
                        </p>
                        @endif
                        {{-- <p><span class="logged-in">●</span> Last connection: 2 hrs ago</p> --}}
                    </div>
                    <div class="col-md-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <img src="https://images.hdqwalls.com/download/girl-taking-a-photo-in-nature-8k-bt-1366x768.jpg"
                    class="card-img-top" height="650" alt="...">

                <img src="https://images.hdqwalls.com/download/girl-taking-a-photo-in-nature-8k-bt-1366x768.jpg"
                    class="card-img-top" height="400" alt="...">
            </div>
            <div class="col-md-4">
                <h3 style="font-weight:bold!important;">About Me</h3>
                <p>Hostess text here</p>

                <table class="table table-borderless " style="width:50%;">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($user->birthdate != null || $user->birthdate != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Age:</th>
                            <td>{{Carbon\Carbon::parse($user->birthdate)->age}}</td>
                        </tr>
                        @endif

                        @if($user->nationality != null || $user->nationality != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Nationality:</th>
                            <td>{{ $user->nationality }}</td>
                        </tr>
                        @endif
                        @if($user->languages != null || $user->languages != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Languages:</th>
                            <td>{{ $user->languages }}</td>
                        </tr>
                        @endif
                        @if($user->height != null || $user->height != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Height:</th>
                            <td>{{ $user->height }}</td>
                        </tr>
                        @endif
                        @if($user->hairColor != null || $user->hairColor != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Cut:</th>
                            <td>{{ $user->hairColor }}</td>
                        </tr>
                        @endif
                        @if($user->shoeSize != null || $user->shoeSize != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Shoes:</th>
                            <td>{{ $user->shoeSize }}</td>
                        </tr>
                        @endif
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Transfer:</th>
                            <td>yes</td>
                        </tr>
                        @if($user->services != null || $user->services != '')
                        <tr>
                            <th scope="row" style="padding-right: 0px;">Services:</th>
                            <td>{{$user->services}} </td>
                        </tr>
                        @endif

                    </tbody>
                </table>


                <div class="mt-5">
                    <h3 style="font-weight:bold!important;">CONTACT HOSTESS</h3>
                    <p style="font-weight:bold!important;" class="mt-3">Unblock the chat and send a personalised
                        message</p>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div><br>
                    <p>Pay now 3 credits. If the hostess does will be offline for over 72 hours the credits will be
                        refunded to your account.</p>
                    <button type="button" class="btn btn-color btn-lg btn-block">Invia Adess <i
                            class='fab fa-telegram-plane' style='font-size:30px;color:white'></i></button>
                    <br><br>
                    <p style="font-weight:bold!important;">Alternatively send a free message</p>
                    <a href="#" class="btn btn-second btn-lg1 active" role="button"
                        aria-pressed="true">Ciao,complimenti:) possiamo sentirci in chat?</a>

                </div>
            </div>

        </div>
    </div>

</div>