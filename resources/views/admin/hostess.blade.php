@extends('layouts.admin.layout')
@section('title', 'Hostess | Hostess')

@section('content')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Hostess</h1>
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-dark">Hostess</li>
            </ul>
        </div>
    </div>
</div>

<section class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <input type="text" data-kt-hostess-table-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-hostess-table-toolbar="base">
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <div class="separator border-gray-200"></div>
                            <div class="px-7 py-5" data-kt-hostess-table-filter="form">
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-bold">Role:</label>
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                        data-placeholder="Select option" data-allow-clear="true"
                                        data-kt-hostess-table-filter="role" data-hide-search="true">
                                        <option></option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Analyst">Analyst</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Support">Support</option>
                                        <option value="Trial">Trial</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                        data-placeholder="Select option" data-allow-clear="true"
                                        data-kt-hostess-table-filter="two-step" data-hide-search="true">
                                        <option></option>
                                        <option value="Enabled">Enabled</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                        data-kt-menu-dismiss="true" data-kt-hostess-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-bold px-6"
                                        data-kt-menu-dismiss="true" data-kt-hostess-table-filter="filter">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center d-none"
                        data-kt-hostess-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-hostess-table-select="selected_count"></span>Selected
                        </div>
                        <button type="button" class="btn btn-danger" data-kt-hostess-table-select="delete_selected">Delete
                            Selected</button>
                    </div>
                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="fw-bolder">Export Users</h2>
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-hostesss-modal-action="close">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                        <div class="fv-row mb-10">
                                            <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                            <select name="role" data-control="select2" data-placeholder="Select a role"
                                                data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                <option></option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="Analyst">Analyst</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Support">Support</option>
                                                <option value="Trial">Trial</option>
                                            </select>
                                        </div>
                                        <div class="fv-row mb-10">
                                            <label class="required fs-6 fw-bold form-label mb-2">Select Export
                                                Format:</label>
                                            <select name="format" data-control="select2"
                                                data-placeholder="Select a format" data-hide-search="true"
                                                class="form-select form-select-solid fw-bolder">
                                                <option></option>
                                                <option value="excel">Excel</option>
                                                <option value="pdf">PDF</option>
                                                <option value="cvs">CVS</option>
                                                <option value="zip">ZIP</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-hostesss-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-hostesss-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content">
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <h2 class="fw-bolder">Add User</h2>
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-hostesss-modal-action="close">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <form id="kt_modal_add_user_form" class="form" action="#">
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                            id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                            data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                            data-kt-scroll-offset="300px">
                                            <div class="fv-row mb-7">
                                                <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                                    style="background-image: url(assets/media/avatars/blank.png)">
                                                    <div class="image-input-wrapper w-125px h-125px"
                                                        style="background-image: url(assets/media/avatars/150-1.jpg);">
                                                    </div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                    </label>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        title="Cancel avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        title="Remove avatar">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                                <input type="text" name="user_name"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="Full name" value="Emma Smith" />
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Email</label>
                                                <input type="email" name="user_email"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="example@domain.com" value="e.smith@kpmg.com.au" />
                                            </div>
                                            <div class="mb-7">
                                                <label class="required fw-bold fs-6 mb-5">Role</label>
                                                <div class="d-flex fv-row">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input me-3" name="user_role"
                                                            type="radio" value="0" id="kt_modal_update_role_option_0"
                                                            checked='checked' />
                                                        <label class="form-check-label"
                                                            for="kt_modal_update_role_option_0">
                                                            <div class="fw-bolder text-gray-800">Administrator</div>
                                                            <div class="text-gray-600">Best for business owners and
                                                                company administrators</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class='separator separator-dashed my-5'></div>
                                                <div class="d-flex fv-row">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input me-3" name="user_role"
                                                            type="radio" value="1" id="kt_modal_update_role_option_1" />
                                                        <label class="form-check-label"
                                                            for="kt_modal_update_role_option_1">
                                                            <div class="fw-bolder text-gray-800">Developer</div>
                                                            <div class="text-gray-600">Best for developers or people
                                                                primarily using the API</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class='separator separator-dashed my-5'></div>
                                                <div class="d-flex fv-row">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input me-3" name="user_role"
                                                            type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                        <label class="form-check-label"
                                                            for="kt_modal_update_role_option_2">
                                                            <div class="fw-bolder text-gray-800">Analyst</div>
                                                            <div class="text-gray-600">Best for people who need full
                                                                access to analytics data, but don't need to update
                                                                business settings</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class='separator separator-dashed my-5'></div>
                                                <div class="d-flex fv-row">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input me-3" name="user_role"
                                                            type="radio" value="3" id="kt_modal_update_role_option_3" />
                                                        <label class="form-check-label"
                                                            for="kt_modal_update_role_option_3">
                                                            <div class="fw-bolder text-gray-800">Support</div>
                                                            <div class="text-gray-600">Best for employees who regularly
                                                                refund payments and respond to disputes</div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class='separator separator-dashed my-5'></div>
                                                <div class="d-flex fv-row">
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input me-3" name="user_role"
                                                            type="radio" value="4" id="kt_modal_update_role_option_4" />
                                                        <label class="form-check-label"
                                                            for="kt_modal_update_role_option_4">
                                                            <div class="fw-bolder text-gray-800">Trial</div>
                                                            <div class="text-gray-600">Best for people who need to
                                                                preview content data, but don't need to make any updates
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-hostesss-modal-action="cancel">Discard</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-hostesss-modal-action="submit">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_hostess">
                    <thead>
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">

                            <th width="2%">#</th>
                            <th width="10%">Image</th>
                            <th width="13%">Name</th>
                            <th width="15%">Email</th>
                            <th width="15%">Mobile</th>
                            <th width="10%">City</th>
                            <th width="5%">Gender</th>
                            <th width="5%">Earned Credit</th>
                            <th width="10%">Status</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-bold">
                        @foreach($users as $item)
                        <tr>
                            <td>{{@$loop->index + 1}}</td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    @if(@$item->profilepic != null || @$item->profilepic != '')
                                    <a href="{{ URL::asset('upload/user/profile/' . @$item->profilepic) }}">
                                        <div class="symbol-label">
                                            <img src="{{ URL::asset('upload/user/profile/' . @$item->profilepic) }}" alt="profile pic" class="w-100">
                                        </div>
                                    </a>
                                    @else
                                    <a href="{{URL::asset('upload/user/profile/default-user.png')}}">
                                        <div class="symbol-label">
                                            <img src="{{URL::asset('upload/user/profile/default-user.png')}}" alt="profile pic" class="w-100">
                                        </div>
                                    </a>
                                    @endif
                                </div>
                            </td>
                            <td>{{ @$item->name }}</td>
                            <td><a href="mailto:{{@$item->email}}">{{@$item->email}}</a></td>
                            <td><a href="tel:{{@$item->mobileno}}">{{ @$item->mobileno}}</a></td>
                            <td>{{ @$item->city }}</td>
                            <td>@if(@$item->gender != null || @$item->gender != '') {{ @$item->gender }} @endif</td>
                            <td>{{ @$item->hostess_credit == null ? 0 : @$item->hostess_credit }}</td>
                            <td>
                                <select onchange="changeStatus('{{@$item->id}}', this)" name="status"
                                    class="form-control status">
                                    <option value="Active" @if(@$item->status == 'Active') selected @endif>Active
                                    </option>
                                    <option value="Pending" @if(@$item->status == 'Pending') selected @endif>Pending
                                    </option>
                                    <option value="Approval" @if(@$item->status == 'Approval') selected @endif>Approval
                                    </option>
                                    <option value="Suspended" @if(@$item->status == 'Suspended') selected
                                        @endif>Suspended</option>
                                    <option value="Banned" @if(@$item->status == 'Banned') selected @endif>Banned
                                    </option>

                                </select>
                            </td>
                            
                            <td><a href="{{ route('admin.addUser', ['id' => @$item->id]) }}"><i
                                        class="fa fa-edit fa-lg text-primary" style="font-size:24px;"
                                        title="Edit"></i></a>
                                <a href="javascript::void(0)" onclick="deleteUser('{{@$item->id}}')"><i
                                        class="fa fa-trash-o text-danger" style="font-size:24px;"
                                        title="Delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    function changeStatus(id, thiss) {
            
            var status  = $(thiss).closest("tr").find('.status option:selected').val();
                swal({
                    title: "Warning!",
                    text: "Are you sure? You want to update status of user",
                    icon: "warning",
                    buttons: ['No,cancel it','Yes'],
                    }).then(function(isConfirm) {
                    if(isConfirm == null)
                    {
                        location.href = "{{ url(app()->getLocale() . '/admin/hostess') }}";
                    }
                    if (isConfirm) {
                    $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url(app()->getLocale() . '/admin/changeStatus') }}",
                    type: "POST",
                    data: {
                    id: id,
                    'status': status,
                    '_token': '{{ csrf_token() }}',
                    },
                    success: function(result) {
                    var data = JSON.parse(result);
                    if (data.success) {
                    swal({
                        title: "Success!",
                        text: "Hostess status updated successfully :)",
                        icon: "success",
                        buttons: 'OK'
                    }).then(function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        }
                    });
                }
                },
                error: function(xhr, status, error) {}
                });
                }
                });
            
            }

    function deleteUser(id) {
        swal({
            title: "Warning!",
            text: "Are you sure? You want to delete it",
            icon: "warning",
            buttons: ['No,cancel it','Yes,delete it'],
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url(app()->getLocale() . '/admin/delete_user') }}",
                    type: "POST",
                    data: {
                        id: id,
                        '_token': '{{ csrf_token() }}',
                    },
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
                                    location.reload();
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            }
        });
    }
</script>
@endsection

@section('js')
<script src="{{URL::asset('assets/admin/js/custom/apps/user-management/hostess/list/hostess.js') }}"></script>

@endsection