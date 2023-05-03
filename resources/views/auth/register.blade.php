@include('layouts.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/style_header.css') }}">
<style>
    .container-fluid:before,
    .navbar:before,
    .navbar:after,
    .container-fluid:after {
        display: unset !important;
        content: none !important;
    }

    main {
        margin-top: 50px;
    }

    .card__img {
        width: 150px;
        border-radius: 50%;
        border: 2px solid;
        padding: 5px;
        margin-bottom: 10px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .card__border {
        width: 150px;
        height: 150px;
        border: 5px solid hsl(29deg 84.21% 58.12%);
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin: 0 auto 0.75rem;
    }

    .modal-dialog {
        position: unset;
        width: unset;
        margin: auto;
    }
    .modal-content {
        margin-top: 15%;
    }
</style>
<main class="form-signin w-100 mx-auto">
    <form name="signup" method="post" action="{{ route('user.postRegister') }}" autocomplete="off">
        @csrf
        <h1 style="color:#000000;font-weight:bold!important;text-align: left;" class="h3 mb-3 fw-normal">{{ __('messages.Free Signup') }}</h1>

        <div class="form-floating">
            <span for="floatingInput" style="color: #636161;">{{__('messages.Name')}}</span>
            <input style="" type="text" class="form-control" id="name" name="name"
                mailto:placeholder="name@example.com" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ __('messages.Name field is required') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                {{__('messages.Surname')}}
            </span>
            <input style="" type="text" class="form-control" id="surname" name="surname"
                placeholder="Surname" value="{{ old('surname') }}">
            @if ($errors->has('surname'))
                <span class="text-danger">{{ __('messages.Surname field is required') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <div class="row">
                <div class="col-md-2">
                    <span for="floatingInput" style="color: #636161;">{{__('messages.Phone')}}</span>
                    @if (@$prefix != null || $prefix != '')
                        <select class="form-control" name="mobilenoprefix" id="mobilenoprefix" style="">
                            @foreach ($prefix as $item)
                                <option value="{{ @$item->prefix }}" @if (old('mobilenoprefix') == @$item->prefix)selected @endif>
                                    +{{ @$item->prefix }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>

                <div class="col-md-10">
                    <span for="floatingInput" style="color: #636161;">&nbsp;&nbsp;&nbsp;</span>
                    <input style="" type="text" class="form-control" id="mobileno" name="mobileno"
                        placeholder="" value="{{ old('mobileno') }}">
                    {{-- <label for="floatingInput" style="color: #636161;">Phone</label> --}}

                    @if ($errors->has('mobileno'))
                        <span class="text-danger">{{ __('messages.Phone field is required') }}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                {{__('messages.Email')}}
            </span>
            <input style="" type="text" class="form-control" id="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
            <input type="hidden" class="form-control" id="user_type" name="user_type" value="{{ old('user_type') }}">
            @if ($errors->has('email'))
                <span class="text-danger">
                    @if($errors->has('email') == 'validation.email')  
                        {{ __('messages.Invalid Email Please enter valid email') }}
                    @elseif($errors->has('email') == 'validation.unique')
                        {{ __('messages.Email already exist') }}
                    @else 
                    {{ __('messages.Email field is required') }}
                    @endif 
                </span>
            @endif
        </div>
        <div class="form-floating" id="hidebirthdate">
            <span for="floatingPassword" style="color: #636161;">
                {{__('messages.Birth Date')}}
            </span>

            <div class="row">
                <div class="col-md-3">
                    <span style="color: #636161;">
                        {{__('messages.Day')}}
                    </span>
                    <select aria-label="Day" name="birthday_day" id="day" title="Day" class="form-control">
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ $i }}" @if (old('birthday_day') == $i)selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-3">
                    <span style="color: #636161;">
                        {{__('messages.Month')}}
                    </span>
                    <select aria-label="Month" name="birthday_month" id="month" title="Month" class="form-control">
                        <option value="1" @if (old('birthday_month') == 1)selected @endif>{{__('messages.Jan')}}</option>
                        <option value="2" @if (old('birthday_month') == 2)selected @endif>{{__('messages.Feb')}}</option>
                        <option value="3" @if (old('birthday_month') == 3)selected @endif>{{__('messages.Mar')}}</option>
                        <option value="4" @if (old('birthday_month') == 4)selected @endif>{{__('messages.Apr')}}</option>
                        <option value="5" @if (old('birthday_month') == 5)selected @endif>{{__('messages.May')}}</option>
                        <option value="6" @if (old('birthday_month') == 6)selected @endif>{{__('messages.Jun')}}</option>
                        <option value="7" @if (old('birthday_month') == 7)selected @endif>{{__('messages.Jul')}}</option>
                        <option value="8" @if (old('birthday_month') == 8)selected @endif>{{__('messages.Aug')}}</option>
                        <option value="9" @if (old('birthday_month') == 9)selected @endif>{{__('messages.Sep')}}</option>
                        <option value="10" @if (old('birthday_month') == 10)selected @endif>{{__('messages.Oct')}}</option>
                        <option value="11" @if (old('birthday_month') == 11)selected @endif>{{__('messages.Nov')}}</option>
                        <option value="12" @if (old('birthday_month') == 12)selected @endif>{{__('messages.Dec')}}</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <span style="color: #636161;">
                        {{__('messages.Year')}}
                    </span>
                    <select aria-label="Year" name="birthday_year" id="year" title="Year"
                        class="form-control">
                        <?php
                        for($i=1905;$i<=date("Y");$i++)
                        {
                        ?>
                        <option value="<?php echo $i; ?>" @if (old('birthday_year') == $i)selected @endif><?php echo $i; ?></option>
                        <?php
                        } 
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                {{__('messages.Password')}}
            </span>
            <input style="" type="password" class="form-control" id="password" name="password"
                placeholder="Password" value="{{ old('password') }}">

            @if ($errors->has('password'))
                <span class="text-danger">{{ __('messages.Password field is required') }}</span>
            @endif
        </div>

        <div class="form-floating">
            <span for="floatingPassword" style="color: #636161;">
                {{__('messages.Confirm Password')}}
            </span>
            <input style="" type="password" class="form-control" id="password_confirmation"
                name="password_confirmation" placeholder="Password" value="{{ old('password_confirmation') }}">

            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ __('messages.Password Mismatched Please Enter Valid Confirm Password') }}</span>
            @endif
        </div>

        <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="marketing" name="marketing" value="1" {{ old('marketing') == '1' ? 'checked' : '' }}>
            <label class="form-check-label" for="marketing" style="text-align: left!important;font-size: 12px;">
                <span class="">{{__('messages.Marketing')}}</span>
            </label>
            @if ($errors->has('marketing'))
                <span class="text-danger">{{ __('messages.Please accept Marketing field') }}</span>
            @endif
        </div>
        <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value="1" {{ old('privacy') == '1' ? 'checked' : '' }}>
            <input type="hidden" id="whoIs" name="" value="">
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">{{__('messages.Terms of Use')}}</span>
            </label>
            @if ($errors->has('privacy'))
                <span class="text-danger">{{ __('messages.Please accept our privacy policy') }}</span>
            @endif
        </div>
        <button type="submit" style="background-color: #ED4B60;border-radius:30px;color:#ffffff!important;"
            class="w-100 btn mt-2" name="submit"><b>{{__('messages.Next')}}</b></button>
        <p style="color: #636161;text-align:center;" class="mt-2 mb-3">{{__('messages.Already have an account?')}}&nbsp;<a
                href="{{ route('login') }}" style="color: #ED4B60;">{{__('messages.Sign in')}}</a></p>
    </form>
</main>
<div class="modal fade" id="chooseregmodal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="background-color:#FFFEFF;">
            <div class="modal-header border-0 mt-4">
                <h4 class="modal-title" style="font-weight:bold!important;font-size:30px">
                    {{__('messages.Create your profile for free')}}
                </h4>
            </div>

            <div class="modal-body" id="selectcard">
                <div class="col-md-12" style="text-align: center">
                    <p style="font-size:17px">
                        {{__('messages.It only takes a few minutes and you can start interacting with our community right away')}}
                    </p>
                    <!--<p style="font-weight:bold!important;font-size:17px">First of all, tell us who you are</p>-->
                </div>
                <div class="row">
                    <div class="col-md-6" style="text-align:center;">
                        <div onclick="changeStyle('user');checkUserType('user');" class="">
                            <img src="https://t4.ftcdn.net/jpg/04/50/60/51/360_F_450605101_Rc8xz4hnMtuePmpZA1i6RZMwREwcqaZI.jpg"
                                alt="card image" class="card__img" />
                        </div>
                        <h4 class="card__name" whoIs="user">{{__('messages.Client')}}</h4>
                    </div>
                    <div class="col-md-6" style="text-align:center;">
                        <div class="" onclick="checkUserType('hostess');">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYodX4PS5R7aKD07Tli-JcxLDvuKv5PZOFZHpuihWbTu63e-riirBBrvu8IqOJz7XjaSQ&usqp=CAU"
                                alt="card image" class="card__img" />
                        </div>
                        <h4 class="card__name" whoIs="hostess">{{__('messages.Hostess')}}</h4>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" style="display:none;" id="chooseregmodalclosebtn"
                    data-dismiss="modal">{{__('messages.Close')}}</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script>
    // $("#chooseregmodal").modal('show');
    @php
    if(!$errors->any())
    { 
    @endphp
    $('#chooseregmodal').modal({
        backdrop: 'static',
        keyboard: false
    }, 'show');
    @php
    } 
    else{
    @endphp
    var userType = $("#user_type").val();
    if(userType == 'user')
    {
        var element = document.getElementById("hidebirthdate");
        element.style.display = "none";
    } 
    @php
    }
    @endphp
    $('#selectcard img').click(function() {
        $('img').not($(this)).css({
            'border': 'none'
        });
        $(this).css({
            'border': '3px solid hsl(29deg 84.21% 58.12%)'
        });
        var whoIs = $(this).closest('.col-md-6').find("h4").attr('whoIs');
        $("#whoIs").val(whoIs);
    });

    function changeStyle() {
        var element = document.getElementById("hidebirthdate");
        element.style.display = "none";
    }

    function checkUserType(params) {
        $("#user_type").val(params);
        $('#chooseregmodalclosebtn').trigger('click');
    }
</script>
</body>

</html>
