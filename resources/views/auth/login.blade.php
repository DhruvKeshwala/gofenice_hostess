@include('layouts.header')
<style>
.form-signin{
max-width:400px;
}

</style>
@section('title', 'Hostess | Sign in')
    <main class="form-signin w-100 mx-auto">
        <form name="signup" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <h1 style="color:#000000;text-align: left;font-weight:bold!important;" class="h3 mb-3 fw-normal">Sign-in</h1>

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
                    Mobile
                </span>
                <input style="" type="text"
                    class="form-control" id="mobileno" name="mobileno"  value="{{ old('mobileno')}}">
                
                @if ($errors->has('mobileno'))
                <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                @endif
            </div>
            <div class="form-floating">
		    <span for="floatingPassword" style="color: #636161;">
                    Password
                </span>
                <input style="" type="password"
                    class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password')}}">
                
                <input type="hidden" name="role" value="user">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            
            
            <button type="submit" style="background-color: #ED4B60;border-radius:30px;color:#ffffff!important;" class="w-100 btn mt-2" name="submit"><b>Sign in</b></button>
            <p style="color: #636161;text-align:center;" class="mt-2 mb-3">New User?&nbsp;<a href="{{ route('register')}}"
                    style="color: #ED4B60;">Sign up</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>