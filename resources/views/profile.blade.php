@include('layouts.header')
<main class="form-signin w-100 mx-auto text-center">
    <form>
        <h5 style="text-align:center;" class="mb-3 fw-normal"><span class="text-white">Welcome to </span><span
                style="color:#c98e49">Stellae.<br /></span><span class="text-white">Let's get to know you a
                little.</span></h5>
        <input id="avatar" style="display:none" type="file" />
        <label for="avatar" style="cursor:pointer">
            <div style="background-color: #e0e0e0;;border-radius: 50%;height: 80px;
        width: 80px;margin: auto;opacity: 0.1;">
                <i style="line-height: 80px;" class="far fa-user fa-3x"></i>
            </div>
            <p class="py-2" style="color:#c98e49">Add avatar</p>
        </label>
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingFirstNameInput" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
            <label for="floatingFirstNameInput" style="color: #636161;">Name</label>
        </div>
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text" class="form-control"
                id="floatingLastNameInput" placeholder="Last Name">
            <label for="floatingLastNameInput" style="color: #636161;">Last name</label>
        </div>
        <div class="form-floating">
            <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                class="form-control text-white" id="floatingUserNameInput" placeholder="User Name" value="test327">
            <label for="floatingUserNameInput" style="color: #636161;">Username</label>
        </div>
        <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="text-align: justify;font-size: 12px;">
                <span class="text-white">I would like to receive notifications about activities related
                    to my profile and photos. key updates and news from 500px.</span>
            </label>
        </div>
        <button style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-2"
            type="submit">Next</button>
    </form>
</main>

</body>

</html>