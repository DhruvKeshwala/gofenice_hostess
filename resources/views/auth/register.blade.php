@include('layouts.header')
    <main class="form-signin w-100 mx-auto">
        <form name="signup" method="post" action="{{ route('user.postRegister') }}" autocomplete="off">
            @csrf
            <h1 style="color:#000000;font-weight:bold!important;text-align: left;" class="h3 mb-3 fw-normal">Free Signup</h1>

            <div class="form-floating">
		    <span for="floatingInput" style="color: #636161;">Name</span>
                <input style="" type="text"
                    class="form-control" id="name" name="name" placeholder="name@example.com" value="{{ old('name')}}">
                
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-floating">
		    <span for="floatingPassword" style="color: #636161;">
                    Surname
                </span>
                <input style="" type="text"
                    class="form-control" id="surname" name="surname" placeholder="Surname" value="{{ old('surname')}}">
                @if ($errors->has('surname'))
                <span class="text-danger">{{ $errors->first('surname') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <div class="row">
                    <div class="col-md-2">
                        <span for="floatingInput" style="color: #636161;">Phone</span>
                        @if(@$prefix != null || $prefix != '')
                            <select class="form-control" name="mobilenoprefix" id="mobilenoprefix" style="">
                                @foreach($prefix as $item)
                                    <option value="{{@$item->prefix}}" style="background-color:#636161;">+{{@$item->prefix}}</option>
                                @endforeach
                            </select>
                            
                        @endif
                    </div>
                    
                    <div class="col-md-10">
                        <span for="floatingInput" style="color: #636161;">&nbsp;&nbsp;&nbsp;</span>
                        <input style="" type="text"
                            class="form-control" id="mobileno" name="mobileno" placeholder="" value="{{ old('mobileno')}}">
                        {{-- <label for="floatingInput" style="color: #636161;">Phone</label> --}}
                        
                    </div>
                    @if ($errors->has('mobileno'))
                    <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-floating">
		    <span for="floatingPassword" style="color: #636161;">
                    Email
                </span>
                <input style="" type="text"
                    class="form-control" id="email" name="email" placeholder="test@example.com" value="{{ old('email')}}">
                
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating">
		    <span for="floatingPassword" style="color: #636161;">
                    Password
                </span>
                <input style="" type="password"
                    class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password')}}">
                
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-floating">
		     <span for="floatingPassword" style="color: #636161;">
                    Confirm Password
                </span>
                <input style="" type="password"
                    class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" value="{{ old('password_confirmation')}}">
                
                @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="marketing" name="marketing" value="1">
                <label class="form-check-label" for="marketing" style="text-align: left!important;font-size: 12px;">
                    <span class="">Marketing</span>
                </label>
                @if ($errors->has('marketing'))
                <span class="text-danger">{{ $errors->first('marketing') }}</span>
                @endif
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value="1">
                <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                    <span class="" >Terms of Use</span>
                </label>
                @if ($errors->has('privacy'))
                <span class="text-danger">{{ $errors->first('privacy') }}</span>
                @endif
            </div>
            <button type="submit" style="background-color: #ED4B60;border-radius:30px;" class="w-100 btn mt-2" name="submit"><b>Sign
                    up</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">Already have an account?&nbsp;<a href="{{ route('login') }}"
                    style="color: #ED4B60;">Sign
                    in</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>