<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('sign-in.css') }}" rel="stylesheet">
</head>

<body>
    <header style="background-color: #14151b;" class="p-1">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="d-none d-lg-block" data-bs-toggle="offcanvas" href="#offcanvasResponsive" role="button"
                    aria-controls="offcanvasResponsive">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <img src="{{ URL::asset('assets/images/image_2023_03_21T13_45_50_816Z.png') }}"
                            style="width: 150px;" />
                    </div>
                </a>
                <a class="navbar-toggler d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasResponsive"
                    role="button" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="offcanvas-lg offcanvas-start bg-dark" tabindex="-1" id="offcanvasResponsive"
                    aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        <img src="{{ URL::asset('assets/images/image_2023_03_21T13_45_50_816Z.png') }}"
                            style="width: 150px;" />
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#offcanvasResponsive" aria-label="Close"
                            style="background-color: #ffffff;"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul style="margin: auto;"
                            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 d-block d-lg-inline-flex">
                            <li><a href="#" class="nav-link px-4">Explore</a></li>
                            <li><a href="#" class="nav-link px-4">Plans</a></li>
                            <li><a href="#" class="nav-link px-4">Upload</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-end">
                    <a href="" style="color: #dbdbdc;" class="">Login |</a>
                    <a href="" style="color: #dbdbdc;" class="">Register</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="form-signin w-100 mx-auto">
        <form method="POST" action="{{ route('register') }}" autocomplete="off" id="signup">
            @csrf
            <h1 style="color:#c98e49;text-align: left;" class="h3 mb-3 fw-normal">Free Signup</h1>

            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                    class="form-control" id="name" name="name" placeholder="User name"
                    value="{{ old('name') }}" required1>
                <label for="name" style="color: #636161;">Name</label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->get('name') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                    class="form-control" id="surname" name="surname" placeholder="Surname"
                    value="{{ old('surname') }}" required1>
                <label for="surname" style="color: #636161;">
                    Surname
                </label>
                @if ($errors->has('surname'))
                    <span class="text-danger">{{ $errors->first('surname') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <div class="row">
                    <div class="col-md-2">
                        @if (isset($prefix) && @$prefix != null && $prefix != '')
                            <select class="form-control" name="mobilenoprefix" id="mobilenoprefix"
                                style="background-color: transparent;border: none;color:#ffffff" required1>
                                @foreach ($prefix as $item)
                                    <option value="{{ @$item->prefix }}" style="background-color:#636161;">
                                        +{{ @$item->prefix }}</option>
                                @endforeach
                            </select>
                        @endif
                        {{-- <label for="mobilenoprefix" style="color: #636161;">Code</label> --}}
                    </div>
                    <div class="col-md-10">
                        <input style="background-color: transparent;border: none;color:#ffffff" type="text"
                            class="form-control" id="mobileno" name="mobileno" placeholder="Phone"
                            value="{{ old('mobileno') }}" required1>
                        <label for="mobileno" style="color: #636161;"></label>
                    </div>
                    @if ($errors->has('mobileno'))
                        <span class="text-danger">{{ $errors->first('mobileno') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="mail"
                    class="form-control" id="email" name="email" placeholder="test@example.com"
                    value="{{ old('email') }}" required1>
                <label for="email" style="color: #636161;">
                    Email
                </label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="password"
                    class="form-control" id="password" name="password" required1>
                <label for="password" style="color: #636161;">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-floating">
                <input style="background-color: transparent;border: none;color:#ffffff" type="password"
                    class="form-control" id="cpassword" name="cpassword" required1>
                <label for="cpassword" style="color: #636161;">
                    Confirm Password
                </label>
                @if ($errors->has('cpassword'))
                    <span class="text-danger">{{ $errors->first('cpassword') }}</span>
                @endif
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="marketing" name="marketing" value=""
                    id="flexCheckDefault" required1>
                <label class="form-check-label" for="flexCheckDefault"
                    style="text-align: left!important;font-size: 12px;">
                    <span class="text-white">Marketing</span>
                </label>
                @if ($errors->has('marketing'))
                    <span class="text-danger">{{ $errors->first('marketing') }}</span>
                @endif
            </div>
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value=""
                    id="flexCheckDefault" required1>
                <label class="form-check-label" for="flexCheckDefault"
                    style="text-align: left!important;font-size: 12px;">
                    <span class="text-white">Terms of Use</span>
                </label>
                @if ($errors->has('privacy'))
                    <span class="text-danger">{{ $errors->first('privacy') }}</span>
                @endif
            </div>
            <button type="submit" style="background-color: #c98e49;border-radius:30px;" class="w-100 btn mt-5"
                name="submit"><b>Sign
                    up</b></button>
            <p style="color: #636161;" class="mt-5 mb-3">Already have an account?&nbsp;<a
                    href="{{ route('login') }}" style="color: #c98e49;">Log in</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#signup").validate({
            // Rules for form validation
            rules: {
                name: {
                    required: true
                },
                category: {
                    required: true
                },
                gst: {
                    required: true,
                    number: true
                },

                scategory: {
                    required: true
                },
                status: {
                    required: true
                },
                availability: {
                    required: true
                }
            },

            // Messages for form validation
            messages: {

                name: {
                    required: 'Please enter name'
                }
            },

            // Do not change code below
            errorPlacement: function(error, element) {
                error.appendTo(element.parent());
            }
        });
    });
</script>
