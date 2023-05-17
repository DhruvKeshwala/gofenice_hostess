@extends('layouts.front-layout')
@section('content')
<style>
    .container {
        max-width: 96% !important;
    }
</style>
<section>
    <div class="container">
        <div class="topFilterOptions">
            <div class="searchLikeCol">
                <div class="row g-2 g-lg-3 align-items-center">
                    <div class="col">
                        <div class="searchCol">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="searchIcon"><img src="{{ URL::asset('images/search-icon.svg') }}" alt="..."></span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="javascript:void(0)" class="iconLink fwSBold"><img src="{{ URL::asset('images/heart-filled.svg') }}"
                                alt="..."> <span>Favorites</span></a>
                    </div>
                </div>
            </div>
            <div class="filterLinkCol">
                <a href="javascript:void(0)" class="row g-0 filterTrigger align-items-center">
                    <span class="col">Filter</span>
                    <span class="col-auto"><img src="{{ URL::asset('images/filter-icon.svg') }}" alt="..."></span>
                </a>
                <div class="filterLinks">
                    <ul class="tabs">
                        <li data-tab="tab-1" class="tab-link current active"><a
                                href="javascript:void(0)"><span>All</span></a></li>
                        <li data-tab="tab-2" class="tab-link"><a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/wh-icon.png') }}"
                                    alt="..."> <span>Wing Hostess</span></a></li>
                        <li data-tab="tab-3" class="tab-link"><a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/pm-icon.png') }}"
                                    alt="..."> <span>Photo Models</span></a></li>
                        <li data-tab="tab-4" class="tab-link"><a href="{{ route('showHostess', ['id' => 59]) }}"><img
                                    src="{{ URL::asset('images/new-icon.png') }}" alt="..."> <span>New</span></a></li>
                        <li data-tab="tab-5" class="tab-link"><a href="{{ route('showHostess', ['id' => 59]) }}"><img
                                    src="{{ URL::asset('images/online-icon.svg') }}" alt="..."> <span>Online Now</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="tab-1" class="searchResultCol tab-content current">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 g-xl-4">
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <!--  <label class="likeIcon">
                    <input type="checkbox" class="likeCheck">
                    <img src="{{ URL::asset('images/heart.svg') }}" alt="..." class="simpleHeartIcon">
                    <img src="{{ URL::asset('images/heart-filled.svg') }}" alt="..." class="checkedHeartIcon">
                  </label> -->
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpeg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpeg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-2" class="searchResultCol tab-content">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 g-xl-4">
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <!--  <label class="likeIcon">
                    <input type="checkbox" class="likeCheck">
                    <img src="{{ URL::asset('images/heart.svg') }}" alt="..." class="simpleHeartIcon">
                    <img src="{{ URL::asset('images/heart-filled.svg') }}" alt="..." class="checkedHeartIcon">
                  </label> -->
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Lorem</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-3" class="searchResultCol tab-content">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 g-xl-4">
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <!--  <label class="likeIcon">
                    <input type="checkbox" class="likeCheck">
                    <img src="{{ URL::asset('images/heart.svg') }}" alt="..." class="simpleHeartIcon">
                    <img src="{{ URL::asset('images/heart-filled.svg') }}" alt="..." class="checkedHeartIcon">
                  </label> -->
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Lorem</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-4" class="searchResultCol tab-content">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 g-xl-4">
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <!--  <label class="likeIcon">
                    <input type="checkbox" class="likeCheck">
                    <img src="{{ URL::asset('images/heart.svg') }}" alt="..." class="simpleHeartIcon">
                    <img src="{{ URL::asset('images/heart-filled.svg') }}" alt="..." class="checkedHeartIcon">
                  </label> -->
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Lorem</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-5" class="searchResultCol tab-content">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-3 g-xl-4">
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <!--  <label class="likeIcon">
                    <input type="checkbox" class="likeCheck">
                    <img src="{{ URL::asset('images/heart.svg') }}" alt="..." class="simpleHeartIcon">
                    <img src="{{ URL::asset('images/heart-filled.svg') }}" alt="..." class="checkedHeartIcon">
                  </label> -->
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Lorem</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-02.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-03.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-04.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle1">
                        <div class="cs1ImgCol">
                            <div class="likeIcon button">
                                <svg width="35px" height="25px" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="heart-stroke"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-full"
                                            d="M13.0185191,4.25291223 L12.9746137,4.25291223 C10.1097846,4.25291223 8.67188189,6.6128289 8.5182129,8.92335198 C8.39747298,10.6740809 8.73225185,12.8528876 14.0777375,18.4782704 C14.7127154,19.1080239 15.5654911,19.4695694 16.4596069,19.4880952 C17.3247917,19.4700909 18.1444718,19.0969678 18.7262246,18.4563177 C19.3189478,17.9074999 24.5052763,12.5894551 24.3570955,8.98921012 C24.2363556,6.42623084 22.123407,4.25291223 19.7525139,4.25291223 C18.5053576,4.22947431 17.3125171,4.76253118 16.4980242,5.70727948 C15.6177331,4.73767759 14.354699,4.20555668 13.04596,4.25291223 L13.0185191,4.25291223 Z"
                                            fill="#ff0000" />
                                        <path class="heart-lines" d="M26,4 L30.6852129,0.251829715" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M2.314788,4 L7.00000086,0.251829715"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 10.314788 1)" />
                                        <path class="heart-lines" d="M27,12 L33,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path class="heart-lines" d="M0,12 L6,12" stroke="#ff0000" stroke-width="2"
                                            stroke-linecap="round" transform="matrix(-1 0 0 1 7 1)" />
                                        <path class="heart-lines" d="M24,19 L28.6852129,22.7481703" stroke="#ff0000"
                                            stroke-width="2" stroke-linecap="round" />
                                        <path class="heart-lines" d="M4.314788,19 L9.00000086,22.7481703"
                                            stroke="#ff0000" stroke-width="2" stroke-linecap="round"
                                            transform="matrix(-1 0 0 1 14.314788 1)" />
                                    </g>
                                </svg>
                            </div>
                            <a href="{{ route('showHostess', ['id' => 59]) }}"><img src="{{ URL::asset('images/img-01.jpg') }}" alt="..." class="cs1Img"></a>
                        </div>
                        <div class="cs1ContentCol">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="cs1LeftContent"><a href="javascript:void(0)">Milano</a></div>
                                </div>
                                <div class="col-auto">
                                    <a href="javascript:void(0)" class="nStatus"><img src="{{ URL::asset('images/online-icon.svg') }}"
                                            alt="..." class="statusDot"> <span>Guilia</span></a>
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