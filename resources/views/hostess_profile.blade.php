@include('layouts.header')
<style>
    #profile {

        margin-top: 150px;

    }

    #remove-margins {
        margin-top: 0px !important;
    }

    .btn-light {
        --bs-btn-color: #000;
        --bs-btn-bg: #f8f9fa;
        --bs-btn-border-color: #000;
        --bs-btn-hover-color: #000;
        --bs-btn-hover-border-color: black;
        --bs-btn-focus-shadow-rgb: 211, 212, 213;
        --bs-btn-active-color: #000;
        padding-top: 35px;
        padding-bottom: 35px;
        margin-top: 100px;

    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: white;
        color: #212529;
        /* background-color: var(--bs-nav-pills-link-active-bg); */
    }

    button:focus:not(:focus-visible) {
        outline: 0;
    }

    .nav-pills .nav-link {
        /* background: 0 0; */
        border: 0;
        border-radius: var(--bs-nav-pills-border-radius);
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
    }

    .nav-link {
        display: block;
        padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
        font-size: var(--bs-nav-link-font-size);
        font-weight: var(--bs-nav-link-font-weight);
        color: black;
        text-decoration: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    /*checkbox-css*/
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        /* font-size: 22px; */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;

        border-radius: 15px;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked~.checkmark {
        background-image: linear-gradient(rgb(207, 75, 224), rgb(67, 164, 202));
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <main class="w-100 mx-auto text-center" id="profile"
                style="max-width: 800px;padding: 5px;background-color: white;">
                <div class="card" style="width: 18rem;">
                    @if (Auth::user()->profilepic != null || Auth::user()->profilepic != '')
                    <img src="{{ URL::asset('/upload/user/profile/' . Auth::user()->profilepic) }}"
                        class="card-img-top" alt="Profile Pic">
                    @else 
                    <img src="https://t4.ftcdn.net/jpg/04/50/60/51/360_F_450605101_Rc8xz4hnMtuePmpZA1i6RZMwREwcqaZI.jpg"
                        class="card-img-top" alt="Profile Pic">
                    @endif
                    <P class="">CLICK HERE TO CHANGE IMAGE</P>
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->name }} {{ Auth::user()->surname }} </p>
                        <h6 class="card-text ">Profile Visibility : visible</h6>
                        <h6 class="card-text mt-5">Profile Status : {{ Auth::user()->status }}</h6>
                    </div>
                </div>
            </main>
        </div>
        <div class="col-md-9 mt-5">

            <div class="row mt-5">
                <div class="col-md-10">
                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Gallery</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Services & Privacy</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <main class="w-100 mx-auto " id="remove-margins"
                                style="max-width: 1500px;padding: 50px;background-color: white;">
                                <form>
                                    <h3 style="text-align: left">Features</h3>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Height(cm)</label>
                                                <select class="form-control" id="height">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Size</label>
                                                <select class="form-control" id="size">

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Shoe Size</label>
                                                <select class="form-control" id="shoesize">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Languages</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">City</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Nationality</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Italian</option>
                                                    <option>English</option>
                                                    <option>French</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Hair Color</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>blonde</option>
                                                    <option>reds</option>
                                                    <option>chestnuts</option>
                                                    <option>blacks</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="text-white text-right">
                                        <button type="button" class="btn btn-success mt-2"
                                            style="float:right">Save</button>
                                    </div>
                                </form>
                            </main>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            {{-- -------------------------------------------------------- --}}

                            <main class="w-100 mx-auto mt-5" id="remove-margins"
                                style="max-width: 1500px;padding: 15px;background-color: white;">
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-1">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                            class="card-img-top" alt="...">
                                        <h6>Make Private</h6>
                                        <h6>Delete</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                            class="card-img-top" alt="...">
                                        <h6>Make Private</h6>
                                        <h6>Delete</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                            class="card-img-top" alt="...">
                                        <h6>Make Private</h6>
                                        <h6>Delete</h6>
                                    </div>

                                </div>

                                <button type="button" class="btn btn-light ">DRAG AND DROP OR CLICK TO
                                    UPLOAD
                                    PHOTO</button>

                            </main>
                            {{-- -------------------------------------------------------- --}}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <main class="w-100 mx-auto " id="remove-margins"
                                style="max-width: 1500px;padding: 100px;background-color: white;">
                                <label class="container">Conference
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Photoshoot
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Fashion shows
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Extra
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>


                                <div class="form-group row mt-5">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"
                                        style="font-weight: bold;">Profile Visibility
                                        :</label>
                                    <div class="col-sm-4" style="padding-left:1px;">
                                        <select class="form-control" id="inlineFormCustomSelectPref">
                                            <option value="1" selected>visible</option>
                                            <option value="2">visible only to registered users</option>
                                            <option value="3">hidden</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-weight: bold;">SMS
                                                Notification</label>
                                            <label class="container mt-3"> I want to receive Chat Notification
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-weight: bold;">Privacy
                                                Profile</label>

                                            <label class="container mt-3"> Set my profile as 'private'
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>
                                </div>

                                <div class="text-white text-right">
                                    <button type="button" class="btn btn-success mt-5"
                                        style="float:right;">Save</button>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script>
    (function() {
        var elm = document.getElementById('height'),
            df = document.createDocumentFragment();
        for (var i = 150; i <= 190; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.appendChild(document.createTextNode("" + i));
            df.appendChild(option);
        }
        elm.appendChild(df);
    }());


    (function() {
        var elm = document.getElementById('size'),
            df = document.createDocumentFragment();
        for (var i = 26; i <= 32; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.appendChild(document.createTextNode("" + i));
            df.appendChild(option);
        }
        elm.appendChild(df);
    }());

    (function() {
        var elm = document.getElementById('shoesize'),
            df = document.createDocumentFragment();
        for (var i = 35; i <= 43; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.appendChild(document.createTextNode("" + i));
            df.appendChild(option);
        }
        elm.appendChild(df);
    }());
</script>

</body>

</html>
