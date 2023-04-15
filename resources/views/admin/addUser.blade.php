@extends('layouts.admin.layout')
@section('title', 'Users | Hostess')

@section('content')
<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Edit User</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.users')}}" class="text-muted text-hover-primary">Users</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-dark">Edit User</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Button-->
            {{-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                id="kt_toolbar_primary_button">Create</a> --}}
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Edit User</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Profile</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url({{ URL::asset('upload/user/profile/' . @$user->profilepic)}})">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url({{ URL::asset('upload/user/profile/' . @$user->profilepic)}})"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Profile">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="profilepic" id="profilepic" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                           
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="name" id="name"
                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="Name" value="{{ @$user->name }}" />
                                    <div id="nameError"></div>
                            </div>
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="surname" id="surname" class="form-control form-control-lg form-control-solid"
                                    placeholder="Surname" value="{{ @$user->surname }}" />
                                <div id="surnameError"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Input group-->
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                    <div class="col-lg-8">
                            <input type="text" name="email" id="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                placeholder="Email" value="{{ @$user->email }}" />
                            <div id="emailError"></div>
                    </div>
                </div>
 
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mobile</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-2 fv-row">
                                @if(@$prefix != null || $prefix != '')
                                <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" name="mobilenoprefix" id="mobilenoprefix">
                                    @foreach($prefix as $item)
                                    <option value="{{@$item->prefix}}" @if($item->prefix == $user->mobilenoprefix) selected @endif>+{{@$item->prefix}}</option>
                                    @endforeach
                                </select>
                                
                                @endif
                            </div>
                            <div class="col-lg-10 fv-row">
                                <input type="text" name="mobileno" id="mobileno" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="(ex. +91 123123)" value="{{@$user->mobileno }}" />
                                <div id="mobilenoError"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">About me</label>
                    <div class="col-lg-8">
                        <textarea name="aboutme" id="aboutme" cols="30" rows="4" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">{{ @$user->aboutme }}</textarea>
                    </div>
                </div>

                @if(@$user->user_type == 'hostess')
                    <div class="row mb-12">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Birthdate</label>
                        <div class="col-lg-8">
                            <input type="date" name="birthdate" id="birthdate"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                value="{{ @$user->birthdate }}" />
                        </div>
                    </div>
                @endif
                
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Gender</label>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 fv-row">
                                <label><input type="radio" name="gender" value="Male" @if(@$user->gender == 'Male') checked @endif> Male</label><br />
                            </div>
                            <div class="col-lg-6 fv-row">
                                <label><input type="radio" name="gender" value="Female" @if(@$user->gender == 'Female') checked @endif> Female</label><br />
                            </div>
                        </div>
                    </div>
                </div>
                @if(@$user->user_type == 'hostess')
                    <div class="row mb-12">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">City / Country</label>
                        <div class="col-lg-8">
                            <input type="text" name="city" id="city"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                value="{{ @$user->city }}" />
                        </div>
                    </div>
                @endif
                
                @if(@$user->user_type == 'hostess')
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Services</label>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="checkbox" id="Conference" name="services[]" value="Conference" 
                        @if(@$getServices)
                            @foreach($getServices as $service)
                                @if($service == 'Conference') checked @endif
                            @endforeach
                        @endif>
                        <label class="form-check-label" for="Conference" style="text-align: left!important;font-size: 12px;">
                            <span class="">Conference</span>
                        </label>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="checkbox" id="Photoshoot" name="services[]" value="Photoshoot" 
                        @if(@$getServices)
                            @foreach($getServices as $service)
                                @if($service == 'Photoshoot') checked @endif
                            @endforeach
                        @endif>
                        <label class="form-check-label" for="Photoshoot" style="text-align: left!important;font-size: 12px;">
                            <span class="">Photoshoot</span>
                        </label>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="checkbox" id="fashion_shows" name="services[]" value="Fashion shows" @if(@$getServices)
                            @foreach($getServices as $service)
                                @if($service == 'Fashion shows') checked @endif
                            @endforeach
                        @endif>
                        <label class="form-check-label" for="fashion_shows" style="text-align: left!important;font-size: 12px;">
                            <span class="">Fashion shows</span>
                        </label>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="checkbox" id="extra" name="services[]" value="Extra" 
                        @if(@$getServices)
                            @foreach($getServices as $service)
                                @if($service == 'Extra') checked @endif
                            @endforeach
                        @endif>
                        <label class="form-check-label" for="extra" style="text-align: left!important;font-size: 12px;">
                            <span class="">Extra</span>
                        </label>
                    </div>
                </div>
                @endif
                <input type="hidden" name="user_type" value="{{@$user->user_type}}">
                <input type="hidden" name="userId" value="{{@$id}}">
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                @if(@$user->user_type == 'hostess')
                    <a href="{{ route('admin.hostessList') }}" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                @else
                    <a href="{{ route('admin.users') }}" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                @endif
                {{-- <a href="javascript::" onclick="saveProject()"  class="btn btn-primary" id="kt_account_profile_details_submit">Save
                    Changes</button> --}}
                    <a href="javascript:;" onclick="saveUser()" id="saveBtn" class="btn btn-success">SAVE</a>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    function saveUser() 
    {
        $('.errorMessage').hide();
        var flag = 1;
        // var categoryName = $("select[name='categoryName']").val();
        var services = $("input[name='services[]']:checked").map(function () {
          return this.value;
        }).get();

        var name = $("input[name='name']").val();
        var surname = $("input[name='surname']").val();
        var email = $("input[name='email']").val();
        var mobilenoprefix = $("select[name='mobilenoprefix']").val();
        var mobileno = $("input[name='mobileno']").val();
        var aboutme = $('#aboutme').val();

        var birthdate = $("input[name='birthdate']").val();
        if(birthdate == null || birthdate == 'undefined')
            birthdate = '';
        
        var gender = $("input[name='gender']:checked").val();
        if(gender == null || gender == 'undefined')
            gender = '';

        var city = $("input[name='city']").val();
        if(city == null || city == 'undefined')
            city = '';
        
        var userId = $("input[name='userId']").val();
        var user_type = $("input[name='user_type']").val();
        var fd = new FormData();
        if(userId == ''){
            userId = 0;
        }
        // Append data 
        var files = $('#profilepic')[0].files;
        if(files.length > 0)
        {
            fd.append('profilepic',files[0]);
        }
        
        fd.append('name', name);
        fd.append('surname', surname);
        fd.append('services', services);
        fd.append('email', email);
        fd.append('mobilenoprefix', mobilenoprefix);
        fd.append('mobileno', mobileno);
        fd.append('aboutme', aboutme);
        fd.append('birthdate', birthdate);
        fd.append('gender', gender);
        fd.append('city', city);
        fd.append('userId', userId);
        fd.append('user_type', user_type);

        if (name == '' || name == null) 
        {
            flag = 0;
            $("#nameError").html('<span class="errorMessage" style="color:red;">Name Required</span>');
        }
        if (surname == '' || surname == null)
        {
        flag = 0;
        $("#surnameError").html('<span class="errorMessage" style="color:red;">Surname Required</span>');
        }
        function chkemail(str) 
        {
            var reg_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\., ;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!reg_email.test(str)) 
                {
                    return false;
                }
                    return true;
        }
        if (mobileno == '' || mobileno == null)
        {
            flag = 0;
            $("#mobilenoError").html('<span class="errorMessage" style="color:red;">Mobile Required</span>');
        }
        if (email == '' || email == null) 
        {
            flag = 0;
            $("#emailError").html('<span class="errorMessage" style="color:red;">Email Required</span>');
        }
        if (!chkemail($.trim($('#email').val()))) 
        {
            flag = 0;
            $("#emailError").html('<span class="errorMessage" style="color:red;">Invalid email</span>');
        }
        
        //function for URL validation
        // function isValidHttpUrl(string) 
        // {
        //   let url;
        //   try {
        //   url = new URL(string);
        //   } catch (_) {
        //   return false;
        //   }
        //   return url.protocol === "http:" || url.protocol === "https:";
        // }

        // if(domainURL != '' && isValidHttpUrl(domainURL) == false)
        // {
        //   flag = 0;
        //   $("#domainURLPatternError").html('<span class="errorMessage" style="color:red;">Domain URL Link is Invalid</span>');
        // }
        if(flag == 1) 
        {
            var saveBtn                 = document.getElementById("saveBtn");
            saveBtn.innerHTML           = "Wait..";
            $('#saveBtn').addClass('disabled');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('save_user') }}",
                type: "POST",
                data:fd,
                cache: false,
                processData: false,
                contentType: false,
                success: function(result) {
                    var data = JSON.parse(result);
                    if (data.success) {
                        //enable the button
                        saveBtn.innerHTML           = "SAVE";
                        $('#saveBtn').removeClass('disabled');
                        swal({
                            title: "Success!",
                            text: data.message + " :)",
                            icon: "success",
                            buttons: 'OK'
                        }).then(function(isConfirm) {
                            if (isConfirm) {
                                if(data.success == 1)
                                    window.location.href =  "{{ URL::to('admin/users') }}"
                                else
                                   window.location.href = "{{ URL::to('admin/hostess') }}"
                            }
                        })
                    }
                },
                error: function(xhr, status, error) {}
            });
        }
    }
</script>
@endsection