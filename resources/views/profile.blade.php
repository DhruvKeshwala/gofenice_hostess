@include('layouts.header')
<main class="w-100 mx-auto text-center" style="max-width: 800px;
    padding: 15px;
    background-color: #14151b;">
    @if (Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
    @endif
    <form id="formAccountSettings" method="POST" action="{{ route('profile.update', auth()->id()) }}"
        enctype="multipart/form-data">
        @csrf
        <h5 style="text-align:center;" class="mb-3 fw-normal"><span class="text-white">Welcome to </span><span
                style="color:#c98e49">Stellae.<br /></span><span class="text-white">Let's get to know you a
                little.</span></h5>
        <input id="avatar" style="display:none" type="file" name="profilepic" id="profilepic"
            onchange="previewFile()" />
        <label for="avatar" style="cursor:pointer">
            @if (Auth::user()->profilepic != null || Auth::user()->profilepic != '')
                <div
                    style="background-color: #fff;border-radius: 50%;height: 150px;
                width: 150px;margin: auto;">
                    <img src="{{ URL::asset('/upload/user/profile/' . Auth::user()->profilepic) }}"
                        style="height:150px;width:150px;border-radius: 50%;padding:0px;" alt="No Img"
                        id="profile-image1">
                </div>
            @else
                <div
                    style="background-color: #fff;border-radius: 50%;height: 150px;
                    width: 150px;margin: auto;">
                    <i style="line-height: 80px;" class="far fa-user fa-3x"></i>
                </div>
            @endif
            <p class="py-2" style="color:#c98e49">Add avatar</p>
        </label>
        {{-- <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingFirstNameInput" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
            <label for="floatingFirstNameInput" style="color: #636161;">Name</label>
        </div> --}}
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingLastNameInput" placeholder="About me" name="aboutme" id="aboutme"
                value="@if (Auth::user()->aboutme != null || Auth::user()->aboutme != '') {{ Auth::user()->aboutme }} @endif">
            <label for="floatingLastNameInput" style="color: #636161;">About me</label>
        </div>
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="date" class="form-control"
                id="floatingLastNameInput" placeholder="About me" name="birthdate" id="birthdate"
                value="{{ Auth::user()->birthdate }}">
            <label for="floatingLastNameInput" style="color: #636161;">Year of Birth</label>
        </div>
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingFirstNameInput" placeholder="City / Country" name="city"
                value="@if (Auth::user()->city != null || Auth::user()->city != '') {{ Auth::user()->city }} @endif">
            <label for="floatingFirstNameInput" style="color: #636161;">City / Country</label>
        </div>
        <div class="form-floating">
            <fieldset style="background-color: transparent;border: none;color:#ffffff">
                {{-- <legend>Gender</legend> --}}
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-4">
                        <label><input type="radio" name="gender" value="Male"
                                @if (Auth::user()->gender != null || Auth::user()->gender != '') @if (Auth::user()->gender == 'Male') checked @endif
                                @endif> Male</label><br />
                    </div>
                    <div class="col-md-4">
                        <label><input type="radio" name="gender" value="Female"
                                @if (Auth::user()->gender != null || Auth::user()->gender != '') @if (Auth::user()->gender == 'Female') checked @endif
                                @endif> Female</label><br />
                    </div>
                </div><br>
            </fieldset>
            <label for="floatingFirstNameInput" style="color: #636161;">Gender</label>
        </div>


        {{-- <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingFirstNameInput" placeholder="Nationality (ex. India)" name="nationality" value="">
            <label for="floatingFirstNameInput" style="color: #636161;">Nationality</label>
        </div> --}}

        <button style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-2" type="submit">Update
            Profile</button>
    </form>
</main>

</body>

</html>
<script>
    function previewFile() {
        var preview = document.querySelector('img');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function() {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
    $(function() {
        $('#profile-image1').on('click', function() {
            $('#profilepic').click();
        });
    });
</script>
