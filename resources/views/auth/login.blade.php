@include('layouts.header')
@section('title', 'Hostess | Sign in')
    <main class="form-signin w-100 mx-auto">
        <form name="signup" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <h1 style="color:#c98e49;text-align: left;" class="h3 mb-3 fw-normal">Sign-in</h1>

            {{-- <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                    class="form-control" id="mobile" name="mobile" value="{{ old('mobile')}}">
                <label for="floatingInput" style="color: #636161;">email</label>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div> --}}
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                    class="form-control" id="mobileno" name="mobileno" placeholder="mobileno" value="{{ old('mobileno')}}">
                <label for="floatingEmail" style="color: #636161;">
                    Mobile
                </label>
                @if ($errors->has('mobileno'))
                <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="password"
                    class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password')}}">
                <label for="floatingPassword" style="color: #636161;">
                    Password
                </label>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            
            
            <button type="submit" style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-5" name="submit"><b>Sign in</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">New User?&nbsp;<a href="{{ route('register')}}"
                    style="color: #c98e49;">Sign up</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>