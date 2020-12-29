<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/jquery.countdown.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/animsition.min.css') }}" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ URL('css-js-frontend/css/color.css') }}" type="text/css" id="colors">
    <script src="{{ URL('css-js-frontend/js/jquery.min.js') }}"></script>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ URL('') }}">
                                <img class="logo" src="{{ URL('css-js-frontend/images_02/logo-2.png') }}" alt="">
                                <img class="logo-2" src="{{ URL('css-js-frontend/images_02/logo.png') }}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->
                        @if(Session::get('id_customer')=="")
                        <span class="btn-rsvp">Login</span>
                        @endif
                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="{{ URL('/') }}">Home</a></li>
                                <li><a href="#">Vendor</a>
                                    <ul>
                                        <?php $categorie = \App\Categorie::all(); ?>
                                        @foreach ($categorie as $cat)
                                        <li><a href="{{ URL('vendor/'.$cat->id) }}"><?= $cat->deskripsi ?></a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ URL('help') }}">Help</a></li>
                                <li><a href="{{ URL('blog') }}">Blog</a></li>
                                @if(Session::get('id_customer')!="")
                                <li><a href="{{ URL('booking-customer') }}">Data Booking</a></li>
                                <li><a href="{{ URL('riwayat-booking-customer') }}">Riwayat Booking</a></li>
                                <li><a href="{{ URL('logout-authentication') }}">Logout</a></li>
                                @endif
                            </ul>
                        </nav>
                        <!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <!-- rsvp popup begin -->
            <div id="popup-box" class="full-height">
                <span class="btn-close">
                    <i class="icon_close"></i>
                </span>

                <div class="container center-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>Login</span></h2>
                        </div>

                        <div class="spacer-double"></div>

                        <form name="rsvp" id='rsvp' class="form-underline" method="post" action="{{ URL('customer-authentication') }}">
                            @csrf
                            <div class="col-md-3">
                                &nbsp;
                            </div>

                            <div class="col-md-3">
                                <input type='text' name='username' class="form-control" placeholder="Username" required="true">
                            </div>

                            <div class="col-md-3">
                                <input type='password' name='password' class="form-control" placeholder="Password" required="true">
                            </div>

                            <div class="col-md-3">
                                &nbsp
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type='submit' id='submit' value='Submit' class="btn btn-custom">
                                <br />
                                <br />
                                Tidak punya akun? silahkan <a href="{{ URL('register-customer') }}">register.</a>
                            </div>

                        </form>

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
            <!-- rsvp popup close -->

            @yield('content')
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ URL('css-js-frontend/images_02/logo-med.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2020
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>

    @if ($message = Session::get('login_status'))
    <script>
        alert("{{ $message }}");
    </script>
    @endif

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ URL('css-js-frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/easing.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/validation.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/wow.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/enquire.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.plugin.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/jquery.countdown.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/countdown-custom.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/animsition.min.js') }}"></script>
    <script src="{{ URL('css-js-frontend/js/designesia.js') }}"></script>

</body>

</html>