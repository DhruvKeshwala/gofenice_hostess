@extends('layouts.admin.layout')
@section('title', 'Manage Credit | Hostess')

@section('content')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Manage Credit</h1>
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                
                
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Manage Credit</li>
            </ul>
        </div>
    </div>
</div>
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Manage Credit</h3>
        </div>
    </div>
    <div id="kt_account_profile_details" class="collapse show">
        <form id="kt_account_profile_details_form" class="form">
            <div class="card-body border-top p-9">
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Number of Credit</label>
                    <div class="col-lg-8">
                        <input type="number" name="no_of_credit" id="no_of_credit"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Enter Number of Credit"
                            value="{{ @$manageCredit->no_of_credit }}" />
                        <div id="no_of_creditError"></div>
                    </div>
                </div>
                <div class="row mb-12">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Euro Amount</label>
                    <div class="col-lg-8">
                        <input type="number" name="euro_amount" id="euro_amount"
                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Enter Amount(In Euro)"
                            value="{{ @$manageCredit->euro_amount }}" />
                        <div id="euro_amountError"></div>
                    </div>
                </div>

                
                <input type="hidden" name="manageCreditId" value="{{@$manageCredit->id}}">
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a href="javascript:;" onclick="saveManageCredit()" id="saveBtn" class="btn btn-success">SAVE</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    function saveManageCredit() 
    {
        $('.errorMessage').hide();
        var flag = 1;
        
        var no_of_credit    = $("input[name='no_of_credit']").val();
        var euro_amount     = $("input[name='euro_amount']").val();
        var manageCreditId  = $("input[name='manageCreditId']").val();

        var fd = new FormData();
        if(manageCreditId == ''){
            manageCreditId = 0;
        }
       
        fd.append('no_of_credit', no_of_credit);
        fd.append('euro_amount', euro_amount);
        fd.append('manageCreditId', manageCreditId);

        if (no_of_credit == '' || no_of_credit == null || no_of_credit == 0) 
        {
            flag = 0;
            $("#no_of_creditError").html('<span class="errorMessage" style="color:red;">Number of Credit Required</span>');
        }
        if (euro_amount == '' || euro_amount == null || euro_amount == 0)
        {
            flag = 0;
            $("#euro_amountError").html('<span class="errorMessage" style="color:red;">Amount Required</span>');
        }
     
        if(flag == 1) 
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.save_manage_credit') }}",
                type: "POST",
                data:fd,
                cache: false,
                processData: false,
                contentType: false,
                success: function(result) {
                    var data = JSON.parse(result);
                    if (data.success) {
                        swal({
                            title: "Success!",
                            text: data.message + " :)",
                            icon: "success",
                            buttons: 'OK'
                        }).then(function(isConfirm) {
                            if (isConfirm) {
                                window.location.reload;
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