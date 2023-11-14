<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS | Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="{{asset('backend/files/assets/images/favicon.ico')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{asset('backend/files/bower_components/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/files/assets/pages/waves/css/waves.min.css')}}" type="text/css"
        media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/files/assets/icon/feather/css/feather.css')}}">

    <link rel="stylesheet" type="text/css"
        href="{{asset('backend/files/assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('backend/files/assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css"
        href="{{asset('backend/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('backend/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/files/assets/css/pages.css')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="text-center">
                            <img src="{{asset('backend/files/assets/images/logo.png')}}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i
                                                class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i
                                                class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                                    <span id="email_validation_response" class="mt-2" style="color: red"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value id="remember_me" name="remember">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?<a
                                        href="{{ route('register') }}"> <b>Register here </b></a>for free!</p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        </div>

    </section>

    <script src="{{ asset('backend/custom/js/Auth/login.js') }}"></script>
    <script type="text/javascript" src="{{asset('backend/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('backend/files/bower_components/popper.js/js/popper.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('backend/files/bower_components/bootstrap/js/bootstrap.min.js')}}">
    </script>

    <script src="{{asset('backend/files/assets/pages/waves/js/waves.min.js')}}"></script>

    <script type="text/javascript"
        src="{{asset('backend/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{asset('backend/files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/files/bower_components/modernizr/js/css-scrollbars.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('backend/files/assets/js/common-pages.js')}}"></script>
</body>

</html>