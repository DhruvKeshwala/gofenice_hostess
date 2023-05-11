@extends('layouts.admin.layout')
@section('title', 'View Gallery | Hostess')

@section('content')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">View Gallery</h1>
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Gallery</li>
            </ul>
        </div>
    </div>
</div>

<section class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title" style="margin-left: 93%;">
                    <a href="{{ route('admin.gallery') }}" class="btn btn-info">
                        Back
                    </a>
                    </div>
                </div>
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="">
                        @if(@$gallery->count() > 0)
                            @foreach(@$gallery as $item)
                                @if(@$item->image != null || @$item->image != '')
                                    <a href="{{ URL::asset('image/' . @$item->image) }}">
                                        <div class="symbol-label">
                                            <img src="{{ URL::asset('images/' . @$item->image) }}" alt="No IMG" class="w-100">
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        @else
                            <h1>No Gallery available for this user.</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection