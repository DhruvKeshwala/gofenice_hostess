@include('layouts.header')
    <main class="form-signin w-100 mx-auto">
        @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
        @endif
        <form name="otpForm" method="post" action="{{route('user.verifyEmailOtp')}}" autocomplete="off">
            @csrf
            <h1 style="color:#c98e49;text-align: left;" class="h3 mb-3 fw-normal">Email Verification</h1>
            <p style="color: #636161;" class="mt-5 mb-3">We have sent email verification code on your mail account&nbsp;</p>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                    class="form-control" id="otpEmail" name="otpEmail" placeholder="name@example.com" value="{{ old('otpEmail')}}">
                <label for="floatingInput" style="color: #636161;">OTP</label>
                @if ($errors->has('otpEmail'))
                <span class="text-danger">{{ $errors->first('otpEmail') }}</span>
                @endif
                <input type="hidden" name="userId" value="{{@$user->id}}">
            </div>
            <button type="submit" style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-5" name="submit"><b>Verify Email</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">Already have an account?&nbsp;<a href="{{ route('login') }}"
                style="color: #c98e49;">Sign
                in</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>