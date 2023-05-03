@extends('layouts.layout')
@section('title', 'Hostess Profile | Hostess')
@section('content')
<style>
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
    .modal {
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
    .modal-content {
        background-color: #fefefe;
        margin-top: 147px;
        margin: 258px 700px;
        padding: 19px;
        border: 1px solid #888;
        width: 25%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<section>
    <div class="container">
        <div class="topFilterOptions">
            <div class="searchLikeCol">
                <div class="row g-2 g-lg-3 align-items-center">
                    <div class="col">
                        <div class="searchCol">
                            <input type="text" class="form-control" placeholder="{{ __('messages.Search') }}">
                            <span class="searchIcon"><img src="{{ URL::asset('assets/user/images/search-icon.svg') }}"
                                    alt="..."></span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0)" class="iconLink fwSBold"><img
                                src="{{ URL::asset('assets/user/images/heart-filled.svg') }}" alt="...">
                            <span>{{ __('messages.Favorites') }}</span></a>
                    </div>
                </div>
            </div>
            <div class="filterLinkCol">
                <a href="javascript:void(0)" class="row g-0 filterTrigger align-items-center">
                    <span class="col">{{ __('messages.Filter') }}</span>
                    <span class="col-auto"><img src="{{ URL::asset('assets/user/images/filter-icon.svg') }}"
                            alt="..."></span>
                </a>
                <div class="filterLinks">
                    <ul class="tabs">
                        <li data-tab="tab-1" class="tab-link current active"><a
                                href="javascript:void(0)"><span>{{__('messages.All')}}</span></a></li>
                        <li data-tab="tab-2" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/wh-icon.png') }}" alt="..."> <span>{{__('messages.Wing Hostess')}}</span></a></li>
                        <li data-tab="tab-3" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/pm-icon.png') }}" alt="..."> <span>{{__('messages.Photo Models')}}</span></a></li>
                        <li data-tab="tab-4" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/new-icon.png') }}" alt="...">
                        <span>{{ __('messages.New') }}</span></a></li>
                        <li data-tab="tab-5" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('assets/user/images/online-icon.svg') }}" alt="..."><span>{{__('messages.Online Now')}}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="tab-1" class="profileDetailCol tab-content current">
            <div class="row">
                <div class="col-lg">
                    <div class="profileLeftCol">
                        <div class="proLeftTopCol">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="topInfoCol">
                                        <h4>Maddalena, <small>Perugia, 24 anni</small></h4>
                                    {{-- <span class="lcTime">Last connerction: 2 hrs ago</span> --}}
@php
                                        $to = Carbon\Carbon::now(); 
                                        $from = @$user->last_seen;
                                        $diff_in_minutes = @$to->diffInMinutes($from);
@endphp
                                        @if(@$diff_in_minutes >= 0 && @$diff_in_minutes <= 10)
                                            <span class="lcTime">{{__('messages.Last connection:')}} {{__('messages.online')}}</span>
                                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                                        @elseif(@$diff_in_minutes > 10 && @$diff_in_minutes <= 119)
                                            <span class="lcTime2"></span> {{__('messages.Last connection:')}} {{__('messages.just now')}}</span>
                                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                                        @elseif(@$diff_in_minutes > 119 && @$diff_in_minutes <= 1440) 
                                            <span>{{__('messages.Last connection:')}} {{__('messages.from a few hours')}}</span>
                                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                                        @elseif(@$diff_in_minutes > 1440 && @$diff_in_minutes <= 2880) 
                                            <span>{{__('messages.Last connection:')}}{{__('messages.1 day')}}</span>
                                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                                        @elseif(@$diff_in_minutes > 2880)
                                            <span>{{__('messages.Last connection:')}}{{__('messages.for a few days')}}</span>
                                            {{-- {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }} --}}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="ratingStars">
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="profileRightCol stickyTop">
                        <div class="sidebarCard aboutMe">
                            <h4 class="lineTitle"><span>{{__('messages.About me')}}</span></h4>
                            <p>{{__('messages.Hostess text here hostess text here.')}} </p>
                            <ul class="optionList">
                                
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Age:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{Carbon\Carbon::parse(@$user->birthdate)->age}}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Nationality:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{ @$user->nationality }}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Languages:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{ @$user->languages }}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Height:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{ @$user->height }}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Cut:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{ @$user->hairColor }}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Shoes:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{ @$user->shoeSize }}
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Transfer:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            Yes
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Services:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{@$user->services}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <h4 class="lineTitle"><span>{{__('messages.CONTACT')}} {{__('messages.HOSTESS')}} </span></h4>
                            @if(Auth::id() != null || Auth::id() != '')
                            <div class="mb-20">
                                <p class="fwSBold">{{__('messages.Unlock the chat and send a personalized message')}} </p>
                                <div class="tAreaCol">
                                    <form action="" name="formConfirm" method="post">
                                    @csrf
                                        {{-- hostess id --}}
                                        <input type="hidden" name="receiver_id" value="{{$id}}">
                                        {{-- user id --}}
                                        <input type="hidden" name="sender_id" value="{{ Auth::user()->id }}">
                                        
                                        <textarea class="form-control" placeholder="{{ __('messages.Write your personalized message') }}" name="message" id="message"></textarea>
                                        <input type="hidden" name="hostessCredit" id="hostessCredit" value="{{@$user->credit}}">
                                        <input type="hidden" name="userCredit" id="userCredit" value="{{@Auth::user()->credit}}">
                                            <div id="messageError"></div>
                                    </form>
                                </div>
                                <p><small>{{__('messages.Pay now 3 credits. If the hostess does will be offline for over 72 hours the credits will be refunded to your account.')}}</small></p>
                                {{-- <button class="btn sendBtn" id="myBtn">{{__('messages.Invia Adess')}}</button> --}}
                                <button class="btn sendBtn" onclick="sendMessage()" id="saveBtn">{{__('messages.Invia Adess')}}</button>
                            </div>
                            
                            <!-- The Modal Confirm-->
                            <div id="myModal" class="modal">                            
                                <!-- Modal content -->
                                <div class="modal-content mb-20">
                                    <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1"  height="10%" width="10%">
                                    <span class="close">&times;</span>
                                    <h3><b style="margin-left: 10%;">Use {{@$user->credit}} Credits and send the message</b></h3>
                                    {{-- <form action="" name="formConfirm" method="post">
                                        @csrf --}}
                                        <a class="ModalbuttonGreen" id="sendMessageToHostess"
                                            href="{{URL::to('../stripe-sample-code/public/checkout.html')}}"><strong>CONFIRM</strong></a>
                                        {{-- <button class="ModalbuttonGreen" id="sendMessageToHostess"><strong>CONFIRM</strong></button> --}}
                                    {{-- </form> --}}
                                </div>                            
                            </div>

                            <!-- The Modal Buy Credit Modal-->
                            <div id="lowCreditModal" class="modal">
                            
                                <!-- Modal content -->
                                <div class="modal-content mb-20">
                                    <img src="{{ URL::asset('assets/user/images/logo@3x.png') }}" alt="..." class="logoImg1" height="10%"
                                        width="10%">
                                    <span class="close">&times;</span>
                                    <h3><b style="margin-left: 10%;margin-left: 23%;">You don't have enough credits.</b></h3>
                                    <p style="margin-left: 10%;margin-left: 35%;">Buy your credits now:</p>
                                    {{-- <form action="{{ route('confirmMsg') }}" method="post"> --}}
                                        {{-- @csrf --}}
                                        <button class="ModalbuttonPink"><strong>Buy {{@$user->credit}} credits (for 3 €) and start the chat</strong></button>
                                    {{-- </form> --}}
                                
                                    <button class="ModalbuttonOrange"><strong>Buy a pack of 100 credits for €80 (save 20%!)</strong></button>
                        
                                </div>
                            
                            </div>

                            @else
                                <h4><a style="color:#3B71CA;" href="{{ route('register') }}" target="_blank">{{ __('messages.Signup for free') }}</a> {{__('messages.or')}} <a style="color:#3B71CA;" href="{{ route('login') }}" target="_blank">{{__('messages.login')}}</a> {{__('messages.to contact this hostess')}}.</h4>
                            @endif
                            <div class="btmForm">
                                <p class="fwSBold">{{__('messages.Alternatively send a free message')}}</p>
                                <!-- <div class="msgInput">
                      <input type="text" class="form-control" placeholder="Ciao, complimenti :) possiamo sentirci in chat? ">
                      <button class="sendArrowBtn">
                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}" alt="..." ></span>
                       </button>
                    </div> -->
                                <div class="msgInput">
                                    <a href="javascript:void(0);" id="freeMsgBtn" class="btn btn_outline">
                                        <span>{{ __('messages.Hello, congratulations can we chat?') }}</span>
                                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}"
                                                alt="..."></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-2" class="profileDetailCol tab-content">
            <div class="row">
                <div class="col-lg">
                    <div class="profileLeftCol">
                        <div class="proLeftTopCol">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="topInfoCol">
                                        <h4>Lorem, <small>Perugia, 24 anni</small></h4>
                                        <span class="lcTime">Last connerction: 2 hrs ago</span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="ratingStars">
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="profileRightCol stickyTop">
                        <div class="sidebarCard aboutMe">
                            <h4 class="lineTitle"><span>About me</span></h4>
                            <p>Hostess text here hostess text here. </p>
                            <ul class="optionList">
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Age:</span>
                                        </div>
                                        <div class="col optionText">
                                            24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Nationality:</span>
                                        </div>
                                        <div class="col optionText">
                                            Italy
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Languages:</span>
                                        </div>
                                        <div class="col optionText">
                                            English, Italian
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Height:</span>
                                        </div>
                                        <div class="col optionText">
                                            160
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Cut:</span>
                                        </div>
                                        <div class="col optionText">
                                            blonde
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Shoes:</span>
                                        </div>
                                        <div class="col optionText">
                                            35
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Transfer:</span>
                                        </div>
                                        <div class="col optionText">
                                            Yes
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Services:</span>
                                        </div>
                                        <div class="col optionText">
                                            Photo Model <br> Service 123
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <form action="" class="mb-20">
                                <h4 class="lineTitle"><span>CONTACT HOSTESS </span></h4>
                                <p class="fwSBold">Unlock the chat and send a personalized message </p>
                                <div class="tAreaCol">
                                    <textarea class="form-control"
                                        placeholder="Scrivi il tuo messaggio personalizzato"></textarea>
                                </div>
                                <p><small>Pay now 3 credits. If the hostess does will be offline for over 72
                                        hours the credits will be refunded to your account.</small></p>
                                <button class="btn sendBtn">Invia Adess</button>
                            </form>
                            <div class="btmForm">
                                <p class="fwSBold">Alternatively send a free message</p>
                                <!-- <div class="msgInput">
                      <input type="text" class="form-control" placeholder="Ciao, complimenti :) possiamo sentirci in chat? ">
                      <button class="sendArrowBtn">
                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}" alt="..." ></span>
                       </button>
                    </div> -->
                                <div class="msgInput">
                                    <a href="javascript:void(0);" class="btn btn_outline">
                                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}"
                                                alt="..."></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-3" class="profileDetailCol tab-content">
            <div class="row">
                <div class="col-lg">
                    <div class="profileLeftCol">
                        <div class="proLeftTopCol">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="topInfoCol">
                                        <h4>Maddalena, <small>Perugia, 24 anni</small></h4>
                                        <span class="lcTime">Last connerction: 2 hrs ago</span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="ratingStars">
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="profileRightCol stickyTop">
                        <div class="sidebarCard aboutMe">
                            <h4 class="lineTitle"><span>About me</span></h4>
                            <p>Hostess text here hostess text here. </p>
                            <ul class="optionList">
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Age:</span>
                                        </div>
                                        <div class="col optionText">
                                            24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Nationality:</span>
                                        </div>
                                        <div class="col optionText">
                                            Italy
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Languages:</span>
                                        </div>
                                        <div class="col optionText">
                                            English, Italian
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Height:</span>
                                        </div>
                                        <div class="col optionText">
                                            160
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Cut:</span>
                                        </div>
                                        <div class="col optionText">
                                            blonde
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Shoes:</span>
                                        </div>
                                        <div class="col optionText">
                                            35
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Transfer:</span>
                                        </div>
                                        <div class="col optionText">
                                            Yes
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Services:</span>
                                        </div>
                                        <div class="col optionText">
                                            Photo Model <br> Service 123
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <form action="" class="mb-20">
                                <h4 class="lineTitle"><span>CONTACT HOSTESS </span></h4>
                                <p class="fwSBold">Unlock the chat and send a personalized message </p>
                                <div class="tAreaCol">
                                    <textarea class="form-control"
                                        placeholder="Scrivi il tuo messaggio personalizzato"></textarea>
                                </div>
                                <p><small>Pay now 3 credits. If the hostess does will be offline for over 72
                                        hours the credits will be refunded to your account.</small></p>
                                <button class="btn sendBtn">Invia Adess</button>
                            </form>
                            <div class="btmForm">
                                <p class="fwSBold">Alternatively send a free message</p>
                                <!-- <div class="msgInput">
                      <input type="text" class="form-control" placeholder="Ciao, complimenti :) possiamo sentirci in chat? ">
                      <button class="sendArrowBtn">
                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}" alt="..." ></span>
                       </button>
                    </div> -->
                                <div class="msgInput">
                                    <a href="javascript:void(0);" class="btn btn_outline">
                                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}"
                                                alt="..."></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-4" class="profileDetailCol tab-content">
            <div class="row">
                <div class="col-lg">
                    <div class="profileLeftCol">
                        <div class="proLeftTopCol">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="topInfoCol">
                                        <h4>Lorem, <small>Perugia, 24 anni</small></h4>
                                        <span class="lcTime">Last connerction: 2 hrs ago</span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="ratingStars">
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="profileRightCol stickyTop">
                        <div class="sidebarCard aboutMe">
                            <h4 class="lineTitle"><span>About me</span></h4>
                            <p>Hostess text here hostess text here. </p>
                            <ul class="optionList">
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Age:</span>
                                        </div>
                                        <div class="col optionText">
                                            24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Nationality:</span>
                                        </div>
                                        <div class="col optionText">
                                            Italy
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Languages:</span>
                                        </div>
                                        <div class="col optionText">
                                            English, Italian
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Height:</span>
                                        </div>
                                        <div class="col optionText">
                                            160
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Cut:</span>
                                        </div>
                                        <div class="col optionText">
                                            blonde
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Shoes:</span>
                                        </div>
                                        <div class="col optionText">
                                            35
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Transfer:</span>
                                        </div>
                                        <div class="col optionText">
                                            Yes
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Services:</span>
                                        </div>
                                        <div class="col optionText">
                                            Photo Model <br> Service 123
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <form action="" class="mb-20">
                                <h4 class="lineTitle"><span>CONTACT HOSTESS </span></h4>
                                <p class="fwSBold">Unlock the chat and send a personalized message </p>
                                <div class="tAreaCol">
                                    <textarea class="form-control"
                                        placeholder="Scrivi il tuo messaggio personalizzato"></textarea>
                                </div>
                                <p><small>Pay now 3 credits. If the hostess does will be offline for over 72
                                        hours the credits will be refunded to your account.</small></p>
                                <button class="btn sendBtn">Invia Adess</button>
                            </form>
                            <div class="btmForm">
                                <p class="fwSBold">Alternatively send a free message</p>
                                <!-- <div class="msgInput">
                      <input type="text" class="form-control" placeholder="Ciao, complimenti :) possiamo sentirci in chat? ">
                      <button class="sendArrowBtn">
                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}" alt="..." ></span>
                       </button>
                    </div> -->
                                <div class="msgInput">
                                    <a href="javascript:void(0);" class="btn btn_outline">
                                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}"
                                                alt="..."></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-5" class="profileDetailCol tab-content">
            <div class="row">
                <div class="col-lg">
                    <div class="profileLeftCol">
                        <div class="proLeftTopCol">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="topInfoCol">
                                        <h4>Maddalena, <small>Perugia, 24 anni</small></h4>
                                        <span class="lcTime">Last connerction: 2 hrs ago</span>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="ratingStars">
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star-filled.svg') }}" alt="...">
                                        </li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                        <li><img src="{{ URL::asset('assets/user/images/star.svg') }}" alt="..."></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                        <div class="proLeftImgCol">
                            <img src="{{ URL::asset('assets/user/images/img-1.jpg') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="profileRightCol stickyTop">
                        <div class="sidebarCard aboutMe">
                            <h4 class="lineTitle"><span>About me</span></h4>
                            <p>Hostess text here hostess text here. </p>
                            <ul class="optionList">
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Age:</span>
                                        </div>
                                        <div class="col optionText">
                                            24
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Nationality:</span>
                                        </div>
                                        <div class="col optionText">
                                            Italy
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Languages:</span>
                                        </div>
                                        <div class="col optionText">
                                            English, Italian
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Height:</span>
                                        </div>
                                        <div class="col optionText">
                                            160
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Cut:</span>
                                        </div>
                                        <div class="col optionText">
                                            blonde
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Shoes:</span>
                                        </div>
                                        <div class="col optionText">
                                            35
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Transfer:</span>
                                        </div>
                                        <div class="col optionText">
                                            Yes
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">Services:</span>
                                        </div>
                                        <div class="col optionText">
                                            Photo Model <br> Service 123
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <form action="" class="mb-20">
                                <h4 class="lineTitle"><span>CONTACT HOSTESS </span></h4>
                                <p class="fwSBold">Unlock the chat and send a personalized message </p>
                                <div class="tAreaCol">
                                    <textarea class="form-control"
                                        placeholder="Scrivi il tuo messaggio personalizzato"></textarea>
                                </div>
                                <p><small>Pay now 3 credits. If the hostess does will be offline for over 72
                                        hours the credits will be refunded to your account.</small></p>
                                <button class="btn sendBtn">Invia Adess</button>
                            </form>
                            <div class="btmForm">
                                <p class="fwSBold">Alternatively send a free message</p>
                                <!-- <div class="msgInput">
                      <input type="text" class="form-control" placeholder="Ciao, complimenti :) possiamo sentirci in chat? ">
                      <button class="sendArrowBtn">
                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}" alt="..." ></span>
                       </button>
                    </div> -->
                                <div class="msgInput">
                                    <a href="javascript:void(0);" class="btn btn_outline">
                                        <span>Ciao, complimenti :) possiamo sentirci in chat?</span>
                                        <span><img src="{{ URL::asset('assets/user/images/angle-right.svg') }}"
                                                alt="..."></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
}
</script>
@endsection

@section('footer')
<script src="{{ URL::asset('assets/user/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    function sendMessage() 
    {
        $('.errorMessage').hide();
        var flag = 1;
        
        var message         = $('#message').val();
        var hostessCredit   = $("input[name='hostessCredit']").val();
        var userCredit      = $("input[name='userCredit']").val();
        var receiver_id = $("input[name='receiver_id']").val();
        var sender_id = $("input[name='sender_id']").val();

        var fd = new FormData();
       
        
        fd.append('message', message);
        fd.append('hostessCredit', hostessCredit);
        fd.append('userCredit', userCredit);
        fd.append('receiver_id', receiver_id);
        fd.append('sender_id', sender_id);

        if (message == '' || message == null) 
        {
            flag = 0;
            $("#messageError").html('<span class="errorMessage" style="color:red;">Message is Required</span>');
        }

        if(userCredit < hostessCredit)
        {
            flag = 0;
            $("#lowCreditModal").show();
            $(".close").click(function(){
                $("#lowCreditModal").hide();
            });
        }
        
        if(flag == 1) 
        {
            var saveBtn                 = document.getElementById("saveBtn");
            // saveBtn.innerHTML           = "Wait..";
            $('#saveBtn').addClass('disabled');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('confirmMsg') }}",
                type: "POST",
                data:fd,
                cache: false,
                processData: false,
                contentType: false,
                success: function(result) {
                    var data = JSON.parse(result);
                    if (data.success) {
                        //enable the button
                        // saveBtn.innerHTML           = "SAVE";
                        $('#saveBtn').removeClass('disabled');
                        // Add modal after success
                        $("#myModal").show();
                        $(".close").click(function(){
                            $("#myModal").hide();
                        });
                        // alert('Yes done..');
                    }
                },
                error: function(xhr, status, error) {}
            });
        }
    }

$(document).ready(function () {
    
    $('#sendMessageToHostess').click(function(){
    var message = $('#message').val();
    var hostessCredit = $("input[name='hostessCredit']").val();
    var userCredit = $("input[name='userCredit']").val();
    var receiver_id = $("input[name='receiver_id']").val();
    var sender_id = $("input[name='sender_id']").val();
    var fd = new FormData();
    
    fd.append('message', message);
    fd.append('hostessCredit', hostessCredit);
    fd.append('userCredit', userCredit);
    fd.append('receiver_id', receiver_id);
    fd.append('sender_id', sender_id);
    
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
            url: "{{ route('sendMessageToHostess') }}",
            type: "POST",
            data:fd,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
            var data = JSON.parse(result);
            if (data.success) {
                //enable the button
                // saveBtn.innerHTML = "SAVE";
                $('#saveBtn').removeClass('disabled');
                // Add modal after success
                $("#myModal").hide();
                $.jGrowl("Message sent successfully.", { life: 10000, theme: 'changeCount'});
                // $("#myModal").show();
                // $(".close").click(function(){
                // });
                // alert('Yes done..');
            }
        },
            error: function(xhr, status, error) {}
        });
    });

    $('#freeMsgBtn').click(function(){
        $('.errorMessage').hide();
        var flag = 1;
        var message = $('#message').val();
        // var hostessCredit = $("input[name='hostessCredit']").val();
        // var userCredit = $("input[name='userCredit']").val();
        var receiver_id = $("input[name='receiver_id']").val();
        var sender_id = $("input[name='sender_id']").val();

        if (message == '' || message == null)
        {
            flag = 0;
            $("#messageError").html('<span class="errorMessage" style="color:red;">Message is Required</span>');
        }
        
        var fd = new FormData();
        
        fd.append('message', message);
        // fd.append('hostessCredit', hostessCredit);
        // fd.append('userCredit', userCredit);
        fd.append('receiver_id', receiver_id);
        fd.append('sender_id', sender_id);
        
        if (flag == 1)
        {
       
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
            url: "{{ route('sendFreeMessageToHostess') }}",
            type: "POST",
            data:fd,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
            var data = JSON.parse(result);
                if (data.success) {
                    $.jGrowl("Your free message sent successfully.", { life: 10000, theme: 'changeCount'});
                }
            },
            error: function(xhr, status, error) {}
            });
        }
    });
});
</script>
@endsection