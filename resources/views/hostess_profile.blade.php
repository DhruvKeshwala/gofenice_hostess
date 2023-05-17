@include('layouts.header')
<style>
    .dropzone {
        background: #00000;
        border-radius: 0px;
        max-width: 550px;
        margin-left: 4px;
        margin-right: auto;
        border: 2px solid #11111;
        margin-top: 50px;
    }

    input.btn.btn-success.mt-2 {
        background: black;
        color: white;
    }

    div#pills-contact>main {
        padding: 50px !important;
    }

    div#imageListId>div {
        margin-bottom: 30px;
    }

    .gallery-images>img {
        /* padding: 0px;
        min-height: 175px;
        max-height: auto;
        height: 100%;
        width: 100%; */
        padding: 0px;
        float: left;
        width: 175px;
        height: 175px;
        background-size: cover;
    }

    .gallery-images {
        margin-bottom: 12px;
    }

    form#dropzone {
        max-width: 100% !important;
        border-style: dotted !important;
    }

    .offcanvas-body a,
    .text-end>a,
    button.btn.btn-dark>a,
    span {
        font-family: 'Poppins', sans-serif;
    }

    .form-check.py-2 span {
        font-size: 14px;
    }

    .form-check.py-2 {
        padding-bottom: 0px !important;
        padding-top: 0px !important;
    }

    span.text-danger {
        padding-left: 14px;
        padding-top: 6px;
    }

    #profile {
        margin-top: 150px;
    }

    #remove-margins {
        margin-top: 0px !important;
    }

    .btn-light {
        --bs-btn-color: #000;
        --bs-btn-bg: #f8f9fa;
        --bs-btn-border-color: #000;
        --bs-btn-hover-color: #000;
        --bs-btn-hover-border-color: black;
        --bs-btn-focus-shadow-rgb: 211, 212, 213;
        --bs-btn-active-color: #000;
        padding-top: 35px;
        padding-bottom: 35px;
        margin-top: 100px;

    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background: black !important;
        color: white !important;
        /* background-color: var(--bs-nav-pills-link-active-bg); */
    }

    button:focus:not(:focus-visible) {
        outline: 0;
    }

    .nav-pills .nav-link {
        /* background: 0 0; */
        border: 0;
        border-radius: var(--bs-nav-pills-border-radius);
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
    }

    .nav-link {
        display: block;
        padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
        font-size: var(--bs-nav-link-font-size);
        font-weight: var(--bs-nav-link-font-weight);
        color: black;
        text-decoration: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    /*checkbox-css*/
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        /* font-size: 22px; */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;

        border-radius: 15px;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-image: linear-gradient(rgb(207, 75, 224), rgb(67, 164, 202));
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <main class="w-100 mx-auto text-center" style="width: 81% !important;" id="profile"
                style="max-width: 800px;padding: 5px;background-color: white;">
                <div class="card" style="width: 18rem;">
                    <form action="{{ route('save_profilePic')}}" method="POST" id="profilePicForm"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="userId" value="{{ Auth::id() }}">
                        @if (Auth::user()->profilepic != null || Auth::user()->profilepic != '')
                        <label for="profilepic" style="cursor: pointer;">
                            <input type="file" name="profilepic" id="profilepic" style="display:none;" />
                            {{-- <img src="IMAGE URL" /> --}}
                            <img src="{{ URL::asset('/upload/user/profile/' . Auth::user()->profilepic) }}"
                                class="card-img-top" alt="Profile Pic">
                        </label>
                        @else
                        <label for="profilepic" style="cursor: pointer;">
                            <input type="file" name="profilepic" id="profilepic" style="display:none;" />
                            <img src="https://t4.ftcdn.net/jpg/04/50/60/51/360_F_450605101_Rc8xz4hnMtuePmpZA1i6RZMwREwcqaZI.jpg"
                                class="card-img-top" alt="Profile Pic">
                        </label>
                        @endif
                    </form>
                    <P class="">{{ __('messages.CLICK HERE TO CHANGE IMAGE') }}</P>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->name }} {{ Auth::user()->surname }} </p>
                        <h6 class="card-text ">{{ __('messages.Profile Visibility') }} :
                            @if(Auth::user()->profileVisibility == 1 || Auth::user()->profileVisibility == null ||
                            Auth::user()->profileVisibility == '') {{ __('messages.Visible') }}
                            @elseif(Auth::user()->profileVisibility == 2)
                            {{ __('messages.visible only to registered users') }}
                            @elseif(Auth::user()->profileVisibility == 3) {{ __('messages.Hidden') }} @endif</h6>
                        <h6 class="card-text mt-5">{{ __('messages.Profile Status') }} : {{ Auth::user()->status }}</h6>
                    </div>
                </div>
            </main>
        </div>
        <div class="col-md-9 mt-5">

            <div class="row mt-5">
                <div class="col-md-10">
                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">{{ __('messages.Profile') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">{{ __('messages.Gallery') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">{{ __('messages.Services & Privacy') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <main class="w-100 mx-auto " id="remove-margins"
                                style="max-width: 1500px;padding: 50px;background-color: white; width: 116%!important;">

                                @if ($message = Session::get('success'))
                                <div style="color: green;">
                                    <strong>{{@$message}}.</strong>
                                </div>
                                @endif

                                <form name="profile" action="{{ route('save_hostess_profile') }}" method="POST">
                                    @csrf
                                    <h3 style="text-align: left">{{ __('messages.Features') }}</h3>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlSelect1">{{ __('messages.Height(cm)') }}</label>
                                                <select class="form-control" id="height" name="height">
                                                    <?php
                                                for ($height=150; $height<=190; $height++)
                                                { 
?>
                                                    <option value='<?= $height; ?>'
                                                        <?= Auth::user()->height == $height ? 'selected' : '' ?>>
                                                        <?= $height; ?>
                                                    </option>
                                                    <?php
                                                }
?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">{{ __('messages.Size') }}</label>
                                                <select class="form-control" id="size" name="size">
                                                    <?php
                                                for ($size=26; $size<=32; $size++) 
                                                { 
?>
                                                    <option value='<?= $size; ?>'
                                                        <?= Auth::user()->size == $size ? 'selected' : '' ?>>
                                                        <?= $size; ?>
                                                    </option>
                                                    <?php
                                                } 
?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlSelect1">{{ __('messages.Shoe Size') }}</label>
                                                <select class="form-control" id="shoesize" name="shoesize">
                                                    <?php
                                                    for ($shoesize=35; $shoesize<=43; $shoesize++) 
                                                    {
?>
                                                    <option value='<?= $shoesize; ?>'
                                                        <?= Auth::user()->shoeSize == $shoesize ? 'selected' : '' ?>>
                                                        <?= $shoesize; ?></option>
                                                    <?php
                                                    } 
?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            @php
                                            $languages = array();
                                            if(Auth::user()->languages != '' && Auth::user()->languages != null)
                                            {
                                            $languages = explode(",",Auth::user()->languages);
                                            }

                                            @endphp
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlSelect1">{{ __('messages.Languages') }}</label>
                                                <select class="form-control" id="languages" name="languages[]" multiple>
                                                    <option value=""></option>
                                                    <option value="Italian" @if(in_array('Italian',$languages)) selected
                                                        @endif>Italian</option>
                                                    <option value="English" @if(in_array('English',$languages)) selected
                                                        @endif>English</option>
                                                    <option value="French" @if(in_array('French',$languages)) selected
                                                        @endif>French</option>
                                                    <option value="German" @if(in_array('German',$languages)) selected
                                                        @endif>German</option>
                                                    <option value="Spanish" @if(in_array('Spanish',$languages)) selected
                                                        @endif>Spanish</option>
                                                    <option value="Russian" @if(in_array('Russian',$languages)) selected
                                                        @endif>Russian</option>
                                                    <option value="Chinese" @if(in_array('Chinese',$languages)) selected
                                                        @endif>Chinese</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">{{ __('messages.City') }}</label>
                                                <input type="text" name="city" id="city" class="form-control"
                                                    @if(Auth::user()->city != null || Auth::user()->city != '')
                                                value="{{ Auth::user()->city }}" @endif>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlSelect1">{{ __('messages.Nationality') }}</label>
                                                <select class="form-control" id="nationality" name="nationality">
                                                    <option value="Italian" @if(Auth::user()->nationality == 'Italian')
                                                        selected @endif>Italian</option>
                                                    <option value="English" @if(Auth::user()->nationality == 'English')
                                                        selected @endif>English</option>
                                                    <option value="French" @if(Auth::user()->nationality == 'French')
                                                        selected @endif>French</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlSelect1">{{ __('messages.Hair Color') }}</label>
                                                <select class="form-control" id="hairColor" name="hairColor">
                                                    <option value="blonde" @if(Auth::user()->hairColor == 'blonde')
                                                        selected @endif>{{ __('messages.blonde') }}</option>
                                                    <option value="reds" @if(Auth::user()->hairColor == 'reds') selected
                                                        @endif>{{ __('messages.reds') }}</option>
                                                    <option value="chestnuts" @if(Auth::user()->hairColor ==
                                                        'chestnuts') selected @endif>{{ __('messages.chestnuts') }}
                                                    </option>
                                                    <option value="blacks" @if(Auth::user()->hairColor == 'blacks')
                                                        selected @endif>{{ __('messages.blacks') }}</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label
                                            for="exampleFormControlTextarea1">{{ __('messages.Description') }}</label>
                                        <textarea class="form-control" id="description" name="description"
                                            rows="3">@if(Auth::user()->description != null || Auth::user()->description != '') {{ Auth::user()->description }} @endif</textarea>
                                    </div>
                                    <br>
                                    <div class="text-white text-right">
                                        {{-- <a href="javascript:;" class="btn btn-success mt-2"
                                            style="float:right" onclick="saveProfile()">Save</a> --}}
                                        <input type="submit" name="save" value="{{ __('messages.Save') }}"
                                            class="btn btn-danger mb-4" style="float:right">


                                    </div>
                                    <input type="hidden" name="form" value="1">
                                    <br><br>
                                </form>
                            </main>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            {{-- -------------------------------------------------------- --}}

                            <main class="w-100 mx-auto mt-5" id="remove-margins"
                                style="max-width: 1500px;padding: 15px;background-color: white; width: 116%!important;"
                                id="gallery-upload-main">
                                <div class="row" id="imageListId">

                                    @if(@$gallery)
                                    @foreach($gallery as $item)
                                    <div galleryId="{{ $item->id }}" id="imageNo{{$loop->index + 1}}"
                                        class="col-md-2 col-md-offset-1 listitemClass">
                                        <div class="gallery-images">
                                            <img src="{{ URL::asset('images/' . @$item->image) }}" class="card-img-top"
                                                alt="...">
                                        </div>
                                        <h6><a title="Change Status" href="javascript::void(0)"
                                                onclick="changeGalleryStatus('{{@$item->id}}')"
                                                class="text-primary mr-2">@if($item->status ==
                                                'Private'){{ __('messages.Make Public') }} @elseif($item->status ==
                                                'Public'){{ __('messages.Make Private') }} @endif</a></h6>
                                        <h6><a title="Delete" href="javascript::void(0)"
                                                onclick="deleteGallery('{{@$item->id}}')"
                                                class="text-danger mr-2">{{ __('messages.Delete') }}</a></h6>
                                    </div>
                                    @endforeach
                                    @endif
                                    {{-- <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                            class="card-img-top" alt="...">
                                        <h6>Make Private</h6>
                                        <h6>Delete</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                            class="card-img-top" alt="...">
                                        <h6>Make Private</h6>
                                        <h6>Delete</h6>
                                    </div> --}}

                                </div>
                                {{-- <div id="outputDiv">
                                    <b>Output of ID's of images : </b>
                                    <input id="outputvalues" type="text" value="" />
                                </div> --}}

                                <div id="dropzone">
                                    {{-- <form action="{{ route('save_hostess_profile') }}" class="dropzone"
                                    id="file-upload" enctype="multipart/form-data"> --}}
                                    <form action="{{ route('save_hostess_profile') }}" enctype="multipart/form-data"
                                        class="dropzone" id="dropzone">
                                        @csrf
                                        <div class="dz-message">
                                            {{-- <button type="button" class="btn btn-light ">DRAG AND DROP OR CLICK TO
                                            UPLOAD
                                            PHOTO</button> --}}
                                            {{ __('messages.DRAG AND DROP OR CLICK TO UPLOAD') }}<br>
                                        </div>
                                    </form>
                                </div>
                                <script type="text/javascript">
                                    Dropzone.options.dropzone =
                                        {
                                            maxFilesize: 10,
                                            renameFile: function (file) {
                                                var dt = new Date();
                                                var time = dt.getTime();
                                                return time + file.name;
                                            },
                                            acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                            addRemoveLinks: false,
                                            timeout: 60000,
                                            success: function (file, response) {
                                                //console.log(response);
                                                //this.on("queuecomplete", function (file) {
                                                //location.reload();
                                                //}); 

                                                swal({
                                                title: "Success!",
                                                text: "Image uploaded successfully :)",
                                                icon: "success",
                                                buttons: 'OK'
                                                }).then(function(isConfirm) {
                                                if (isConfirm) {
                                                    //location.reload();
                                                    $("#imageListId").load(" #imageListId");
                                                }
                                                });
                                            },
                                            error: function (file, response) {
                                                return false;
                                            }
                                        };
                                </script>

                            </main>
                            {{-- -------------------------------------------------------- --}}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <main class="w-100 mx-auto " id="remove-margins"
                                style="max-width: 1500px;padding: 100px;background-color: white; width: 116%!important;">
                                <form name="profile" action="{{ route('save_hostess_profile') }}" method="POST">
                                    @csrf
                                    @php
                                    $getServices = '';
                                    if(Auth::user()->services != null || Auth::user()->services != '')
                                    $getServices = explode(",",Auth::user()->services);
                                    @endphp
                                    <label class="container">{{ __('messages.Conference') }}
                                        <input type="checkbox" name="services[]" id="services" value="Conference"
                                            @if(@$getServices) @foreach($getServices as $service)
                                            @if($service=='Conference' ) checked @endif @endforeach @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">{{ __('messages.Photoshoot') }}
                                        <input type="checkbox" name="services[]" id="services" value="Photoshoot"
                                            @if(@$getServices) @foreach($getServices as $service)
                                            @if($service=='Photoshoot' ) checked @endif @endforeach @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">{{ __('messages.Fashion shows') }}
                                        <input type="checkbox" name="services[]" id="services" value="Fashion shows"
                                            @if(@$getServices) @foreach($getServices as $service)
                                            @if($service=='Fashion shows' ) checked @endif @endforeach @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">{{ __('messages.Extra') }}
                                        <input type="checkbox" name="services[]" id="services" value="Extra"
                                            @if(@$getServices) @foreach($getServices as $service) @if($service=='Extra'
                                            ) checked @endif @endforeach @endif>
                                        <span class="checkmark"></span>
                                    </label>

                                    <input type="hidden" name="userId" value="{{ Auth::id() }}">
                                    <div class="form-group row mt-5">
                                        <label for="inputPassword" class="col-sm-2 col-form-label"
                                            style="font-weight: bold;">{{ __('messages.Profile Visibility') }}
                                            :</label>
                                        <div class="col-sm-4" style="padding-left:1px;">
                                            <select class="form-control" id="profileVisibility"
                                                name="profileVisibility">
                                                <option value="1" @if(Auth::user()->profileVisibility == '1' ||
                                                    Auth::user()->profileVisibility == '') selected
                                                    @endif>{{ __('messages.Visible') }}</option>
                                                <option value="2" @if(Auth::user()->profileVisibility == '2') selected
                                                    @endif>{{ __('messages.visible only to registered users') }}
                                                </option>
                                                <option value="3" @if(Auth::user()->profileVisibility == '3') selected
                                                    @endif>{{ __('messages.Hidden') }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1"
                                                    style="font-weight: bold;">{{ __('messages.SMS Notification') }}</label>
                                                <label class="container mt-3">
                                                    {{ __('messages.I want to receive Chat Notification') }}
                                                    <input type="checkbox" name="smsNotification" id="smsNotification"
                                                        @if(Auth::user()->smsNotification == 1) checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1"
                                                    style="font-weight: bold;">{{ __('messages.Privacy Profile') }}</label>

                                                <label class="container mt-3">
                                                    {{ __('messages.Set my profile as \'private\'') }}
                                                    <input type="checkbox" name="privacyProfile" id="privacyProfile"
                                                        @if(Auth::user()->privacyProfile == 1) checked @endif>
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="text-white text-right">
                                        <input type="submit" name="save" value="{{ __('messages.Save') }}"
                                            class="btn btn-danger mt-2" style="float:right">
                                        {{-- <button type="button" class="btn btn-success mt-5"
                                        style="float:right;" onclick="">Save</button> --}}
                                        {{-- <a href="javascript:;" style="float:right;" onclick="saveProfile()" id="saveBtn" class="btn btn-success mt-5">Save</a> --}}
                                    </div>
                                    <input type="hidden" name="form" value="2">
                                    <br><br>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    document.getElementById("profilepic").onchange = function() {
    document.getElementById("profilePicForm").submit();
    };
</script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script> --}}
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsGn3gopDM_1z9fmtGcJ-KrXEzLPBSOCA&callback=initMap&libraries=places&v=weekly"
    defer></script>
<script>
    $('#languages').select2({
multiple:true,
});
    $(function() {
    $("#imageListId").sortable({
    update: function(event, ui) {
    getIdsOfImages();
    } //end update
    });
    });
    
    function getIdsOfImages() {
    var values = [];
    var galleryId = [];

    $('.listitemClass').each(function(index) {
    values.push($(this).attr("id")
    .replace("imageNo", ""));
    galleryId.push($(this).attr("galleryId"));
    });
    $('#outputvalues').val(values);
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url(app()->getLocale() . '/update_gallery') }}",
        type: "POST",
        data: {
            galleryId: galleryId,
            values: values
        },
        success: function(result) {
        },
        error: function(xhr, status, error) {}
    });
    
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleteGallery(id) {
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
                    url: "{{ url(app()->getLocale() . '/delete_gallery') }}",
                    type: "POST",
                    data: {
                        id: id
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
<script>
    function changeGalleryStatus(id) {
        swal({
            title: "Warning!",
            text: "Are you sure? You want to change status",
            icon: "warning",
            buttons: ['No,cancel it','Yes'],
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url(app()->getLocale() . '/change_gallery_status') }}",
                    type: "POST",
                    data: {
                        id: id
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
    var options = {
        types: ['(cities)'],
        //componentRestrictions: {country: "us"}
    };
    function initMap(){
        var input = document.getElementById('city');
        const autocomplete = new google.maps.places.Autocomplete(input,options);
    }
</script>
</body>

</html>