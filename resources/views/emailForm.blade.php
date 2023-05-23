@include('layouts.header')
    <main class="form-signin w-100 mx-auto">
        @if(Session::has('success'))
        <p style="color: green;">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
        @endif
        <form name="otpForm" method="post" action="{{route('user.verifyEmailOtp')}}" autocomplete="off">
            @csrf
            <h1 style="color:#ed4b60;text-align: left;" class="h3 mb-3 fw-normal">{{__('messages.Email Verification')}}</h1>
            <p style="color: #636161;" class="mt-5 mb-3">{{__('messages.We have sent email verification code on your mail account') }}&nbsp;</p>
            <div class="form-floating">
                <span for="floatingInput" style="color: #636161;">{{ __('messages.Verification Code') }}</span>
                <input style="" type="text"
                    class="form-control" id="otpEmail" name="otpEmail" placeholder="name@example.com" value="{{ old('otpEmail')}}">
                @if ($errors->has('otpEmail'))
                <span class="text-danger">{{ $errors->first('otpEmail') }}</span>
                @endif
                <input type="hidden" name="userId" value="{{Request::segment(3)}}">
            </div>
            <button type="submit" style="background-color: #ed4b60;border-radius:30px;color:white;" class="w-100 btn mt-5" name="submit"><b>{{ __('messages.Verify Code') }}</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">{{__('messages.Already have an account?')}}&nbsp;<a href="{{ route('login') }}"
                style="color: #ed4b60;">{{__('messages.Sign in')}}</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>