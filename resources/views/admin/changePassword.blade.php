@extends('layouts.admin.layout')
@section('title', 'Manage Credit | Hostess')

@section('content')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Change Password</h1>
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>


                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Change Password</li>
            </ul>
        </div>
    </div>
</div>
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Change Password</h3>
        </div>
    </div>
    <div id="kt_account_profile_details" class="collapse show">
        <form id="kt_account_profile_details_form" class="form">
            <div class="card-body border-top p-9">
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">New Password</label>
                    <div class="col-lg-8">
                        <input type="password" name="newPassword" id="newPassword"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                            placeholder="Enter New Password" />
                        <div id="newPasswordError"></div>
                    </div>
                </div>
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Confirm Password</label>
                    <div class="col-lg-8">
                        <input type="password" name="confirmPassword" id="confirmPassword"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                            placeholder="Confirm Password"/>
                        <div id="confirmPasswordError"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="javascript:;" onclick="savePassword()" id="saveBtn" class="btn btn-success">SAVE</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    function savePassword() 
    {
        $('.errorMessage').hide();
        var flag = 1;
        var newPassword     = $("input[name='newPassword']").val();
        var confirmPassword = $("input[name='confirmPassword']").val();
        var fd = new FormData();
        
        fd.append('newPassword', newPassword);
        fd.append('confirmPassword', confirmPassword);

        if (newPassword == '' || newPassword == null)
        {
            flag = 0;
            $("#newPasswordError").html('<span class="errorMessage" style="color:red;">Please Enter New Password</span>');
        }
        
        if (confirmPassword == '' || confirmPassword == null)
        {
            flag = 0;
            $("#confirmPasswordError").html('<span class="errorMessage" style="color:red;">Please Enter Confirm Password</span>');
        }
        if(confirmPassword != '' && confirmPassword != newPassword)
        {
            flag = 0;
            $("#confirmPasswordError").html('<span class="errorMessage" style="color:red;">Password Mismatched Please Enter Valid Confirm Password</span>');
        }

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
                url: "{{ route('admin.saveChangePassword') }}",
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
                                window.location.href =  "{{ URL::to(app()->getLocale() . '/admin/change-password') }}"
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