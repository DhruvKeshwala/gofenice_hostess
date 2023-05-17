@extends('layouts.front-layout')
@section('content')
<section>
    <div class="container">
        <div class="topFilterOptions">
            <div class="searchLikeCol">
                <p>Demo Content Here</p>
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
                        <li data-tab="tab-2" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('images/wh-icon.png') }}"
                                    alt="..."> <span>Wing Hostess</span></a></li>
                        <li data-tab="tab-3" class="tab-link"><a href="javascript:void(0)"><img src="{{ URL::asset('images/pm-icon.png') }}"
                                    alt="..."> <span>Photo Models</span></a></li>
                        <li data-tab="tab-4" class="tab-link"><a href="javascript:void(0)"><img
                                    src="{{ URL::asset('images/new-icon.png') }}" alt="..."> <span>New</span></a></li>
                        <li data-tab="tab-5" class="tab-link"><a href="javascript:void(0)"><img
                                    src="{{ URL::asset('images/online-icon.svg') }}" alt="..."> <span>Online Now</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection