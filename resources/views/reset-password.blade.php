@include('layouts.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/style_header.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/reg-dribble.css') }}">
<style>
    .container-fluid:before,
    .navbar:before,
    .navbar:after,
    .container-fluid:after {
        display: unset !important;
        content: none !important;
    }

    /* main {
        margin-top: 50px;
    } */

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

    body {
        background: #ffffff !important;
    }
</style>
<main class="form-signin w-100 mx-auto">
    
    <form class="mx-auto w-adj-form" name="signup" method="post" action="{{ route('user.saveResetPassword') }}"
        autocomplete="off">
        @csrf
        <h2 class="signup_heading">{{ __('messages.Reset Password') }}</h2>
        @if(Session::has('success'))
        <p style="color: green;">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('error'))
        <div id="errorExplanation" class="errorExplanation text-danger">
            <h2 class="hide">Error</h2>
            <ul>
                <li>
                    {{ Session::get('error') }}
                </li>
            </ul>
        </div>
        {{-- <p style="color: red;">{{ Session::get('error') }}</p> --}}
        @endif
        @if(isset($errors) && $errors->any())
        <div id="errorExplanation" class="errorExplanation text-danger">
            <h2 class="hide">Error</h2>
            <ul>
                @if ($errors->has('newPassword'))
                <li>{{ __('messages.New Password Required') }}</li>
                @endif
                @if ($errors->has('confirmPassword'))
                <li>{{ __('messages.Confirm Password Required') }}</li>
                @endif
                {{-- {{print_r($errors)}} --}}
            </ul>
        </div>
        @endif
        <div class="form-floating">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <span for="floatingPassword" class="span-label">
                        @if($errors->has('newPassword'))<i class="fa fa-exclamation-triangle text-danger"></i>@endif
                        {{__('messages.New Password')}}
                    </span>
                    <input style="" type="password" class="form-control" id="newPassword" name="newPassword" placeholder="{{__('messages.New Password')}}"
                        value="">
                </div>
            </div>
        </div>
        <div class="form-floating">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <span for="floatingPassword" class="span-label">
                        @if($errors->has('confirmPassword'))<i class="fa fa-exclamation-triangle text-danger"></i>@endif
                        {{__('messages.Confirm Password')}}
                    </span>
                    <input style="" type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="{{__('messages.Confirm Password')}}"
                        value="">
                    <input type="hidden" name="userId" value="{{Request::segment(3)}}">
                </div>
            </div>
        </div>
        <div class="form-btns">
            <input type="submit" name="commit" value="{{ __('messages.Save') }}" class="button form-sub"
                fdprocessedid="jimd4s">
        </div>
        <p style="color: #636161;text-align:center;" class="mt-5 mb-3">{{__('messages.New User?')}}&nbsp;<a
                href="{{ route('register') }}" style="color: #ED4B60;">{{__('messages.Sign up')}}</a></p>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script>
</script>
</body>

</html>