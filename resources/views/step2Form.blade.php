@include('layouts.header')

<main class="form-signin w-100 mx-auto">
    <form name="signup" method="post" action="{{ route('user.registerStep2') }}" autocomplete="off"
        enctype="multipart/form-data">
        @csrf
        <h1 style="color:#000000;font-weight:bold!important;text-align: left;" class="h3 mb-3 fw-normal">Step 2
        </h1>

        <div class="form-floating text-center">
            <span for="floatingPassword" style="color: #636161;">
                Add Main Photo
            </span><br>
            <input style="display:none" type="file" name="profilepic" id="profilepic" onchange="previewFile()" />
            <img src="{{ URL::asset('/upload/user-image.png') }}"
                style="height:150px;width:150px;border-radius: 50%;padding:0px;cursor:pointer;" alt="No Img"
                id="profile-image1" onclick="openFileChoosePopup()">
        </div>

        <div class="form-floating">
            <span for="floatingInput" style="color: #636161;">City</span>
            <input style="" type="text" class="form-control" id="city" name="city"
                value="{{ old('city') }}">
            <input type="hidden" name="userId" value="{{ @$user->id }}">
            @if ($errors->has('city'))
                <span class="text-danger">{{ $errors->first('city') }}</span>
            @endif
        </div>
        <div class="form-floating">
            <span for="floatingInput" style="color: #636161;">Services</span>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="Conference" name="services[]" value="Conference"
                @if (is_array(old('services')) && in_array('Conference', old('services'))) checked @endif>
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">Conference</span>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="Photoshoot" name="services[]" value="Photoshoot"
                @if (is_array(old('services')) && in_array('Photoshoot', old('services'))) checked @endif>
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">Photoshoot</span>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="fashion_shows" name="services[]" value="Fashion shows"
                @if (is_array(old('services')) && in_array('Fashion shows', old('services'))) checked @endif>
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">Fashion shows</span>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="extra" name="services[]" value="Extra"
                @if (is_array(old('services')) && in_array('Extra', old('services'))) checked @endif>
            <label class="form-check-label" for="privacy" style="text-align: left!important;font-size: 12px;">
                <span class="">Extra</span>
            </label>
        </div>
        @if ($errors->has('services'))
            <span class="text-danger">{{ $errors->first('services') }}</span>
        @endif

        <div class="form-floating">
            <span for="floatingInput" style="color: #636161;">Are you a wing hostess or wing man ?</span>
        </div>
        <div class="form-radio">
            <input class="form-radio-input" type="radio" name="wing_type" checked value="hostess"
                @if (is_array(old('wing_type')) && in_array('Extra', old('wing_type'))) checked @endif>
            <label class="form-radio-label" for="wing_type" style="text-align: left!important;font-size: 12px;">
                <span class="">Wing Hostess</span>
            </label>

            <input class="form-radio-input" type="radio" name="wing_type" value="man"
                @if (is_array(old('wing_type')) && in_array('Extra', old('wing_type'))) checked @endif>
            <label class="form-radio-label" for="wing_type" style="text-align: left!important;font-size: 12px;">
                <span class="">Wing Man</span>
            </label>
        </div>

        
        
        <button type="submit" style="background-color: #ED4B60;border-radius:30px;color:#ffffff!important;"
            class="w-100 btn mt-2" name="submit"><b>Next</b></button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</body>

</html>
<script>
    function previewFile() {
        var preview = document.getElementById('profile-image1');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function() {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    function openFileChoosePopup() {
        document.getElementById('profilepic').click();
    }
</script>
