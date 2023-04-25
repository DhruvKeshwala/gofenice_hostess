@extends('layouts.layout')
@section('title', 'Hostess Profile | Hostess')

@section('content')
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
                                        $from = $user->last_seen;
                                        $diff_in_minutes = $to->diffInMinutes($from);
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
                                @if($user->birthdate != null || $user->birthdate != '')
                                <li>
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="optLbl">{{__('messages.Age:')}}</span>
                                        </div>
                                        <div class="col optionText">
                                            {{Carbon\Carbon::parse($user->birthdate)->age}}
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @if($user->nationality != null || $user->nationality != '')
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
                                @endif
                                @if($user->languages != null || $user->languages != '')
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
                                @endif
                                @if($user->height != null || $user->height != '')
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
                                @endif
                                @if($user->hairColor != null || $user->hairColor != '')
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
                                @endif
                                @if($user->shoeSize != null || $user->shoeSize != '')
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
                                @endif
                                
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
                                @if($user->services != null || $user->services != '')
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
                                @endif
                            </ul>
                        </div>
                        <div class="sidebarCard contactHostessCol">
                            <form action="" class="mb-20">
                                <h4 class="lineTitle"><span>{{__('messages.CONTACT')}} {{__('messages.HOSTESS')}} </span></h4>
                                <p class="fwSBold">{{__('messages.Unlock the chat and send a personalized message')}} </p>
                                <div class="tAreaCol">
                                    <textarea class="form-control"
                                        placeholder="{{ __('messages.Write your personalized message') }}"></textarea>
                                </div>
                                <p><small>{{__('messages.Pay now 3 credits. If the hostess does will be offline for over 72 hours the credits will be refunded to your account.')}}</small></p>
                                <button class="btn sendBtn">{{__('messages.Invia Adess')}}</button>
                            </form>
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
                                    <a href="javascript:void(0);" class="btn btn_outline">
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
@endsection

@section('footer')
<script src="{{ URL::asset('assets/user/js/script.js') }}"></script>
@endsection