@include('layouts.header')
<style>
.form-signin{
/* max-width:500px; */
}
.login-container{
    display: flex;
    justify-content: space-evenly;
}

</style>

@section('title', 'Sign in | Hostess')
<div class="container login-container">
    <main class="form-signin w-100 mx-auto">
        @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
        @endif
        <div class="row">
        <form name="signup" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <h1 style="color:#000000;text-align: left;font-weight:bold!important;" class="h3 mb-3 fw-normal">{{ __('messages.Sign-in') }}</h1>

            {{-- <div class="form-floating">
                <input style="" type="text"
                    class="form-control" id="mobile" name="mobile" value="{{ old('mobile')}}">
                <label for="floatingInput" style="color: #636161;">email</label>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div> --}}
            <div class="form-floating">
                <span for="floatingEmail" style="color: #636161;">
                    {{ __('messages.Email') }}
                </span>
                <input style="" type="text"
                    class="form-control" id="email" name="email"  value="{{ old('email')}}">
                
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') == 'validation.required' ? __('messages.email_required') : __('messages.auth_failed') }}</span>
                @endif
            </div>
            <div class="form-floating">
		    <span for="floatingPassword" style="color: #636161;">
                    {{ __('messages.Password') }}
                </span>
                <input style="" type="password"
                    class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password')}}">
                
                <input type="hidden" name="role" value="User">
                @if ($errors->has('password'))
                <span class="text-danger">{{ __('messages.password_required') }}</span>
                @endif
            </div>
            
            
            <button type="submit" style="background-color: #ED4B60;border-radius:30px;color:#ffffff!important;" class="w-100 btn mt-2" name="submit"><b>{{ __('messages.Sign in') }}</b></button>
            <p style="color: #636161;text-align:center;" class="mt-2 mb-3">{{ __('messages.New User?') }}&nbsp;<a href="{{ route('register')}}"
                    style="color: #ED4B60;">{{ __('messages.Sign up') }}</a></p>
        </form>
        
    </main>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>