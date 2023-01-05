<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="wplly" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="construction html5 template">
    <link href={{asset("assets/images/logo/footer-logo.png")}} rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href={{asset("assets/css/external.css")}} rel="stylesheet">
    <!-- Extrnal CSS -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <!-- Boostrap Core CSS -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">
    <!-- Style CSS -->

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/revolution/css/settings.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/revolution/css/layers.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/revolution/css/navigation.css")}}>
    <!-- CSS only -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src={{asset("assets/js/html5shiv.js")}}></script>
    <script src={{asset("assets/js/respond.min.js")}}></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



    <script defer src={{ asset("https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js")}}></script>

    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>P Property</title>
</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1">
        </div>
        <div class="bounce2">
        </div>
        <div class="bounce3">
        </div>
    </div>
</div>

<header id="navbar-spy" class="transparent-header">
    <nav id="primary-menu" class="navbar navbar-fixed-top style-1">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{url('/')}}">
                    <img src="{{asset("assets/images/logo/nav-logo.png")}}" alt="Vukcevic Apartments">
                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>

                    <!-- Apartments -->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apartments</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('catalog') }}">Catalog</a>
                            </li>
                        </ul>
                    </li>

                    <!-- About us-->
                    <li class="has-dropdown">
                        <a href="{{ url('about-us') }}" data-toggle="dropdown" class="dropdown-toggle">about</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('about-us') }}">about us</a>
                            </li>

                            <li>
                                <a href="{{ url('faq') }}">FAQS</a>
                            </li>

                        </ul>
                    </li>

                    <!-- li end -->
                    <li>
                        <a href="{{ url('contact') }}">contact</a>
                    </li>
                    <!-- li end -->

                    <!-- Admin section  -->
                    @admin

                        <li class="has-dropdown" >
                            <a data-toggle="dropdown" class="dropdown-toggle" style="color: yellow">admin</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('admin-apartments') }}">Apartments</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-categories') }}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-cities') }}">Cities</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-about') }}">About us Page</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-faqs') }}">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-features') }}">Features</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin-blogs') }}">Blogs</a>
                                </li>
                            </ul>
                        </li>

                    @endadmin



                            @auth
                                <li class="has-dropdown" >
                                    <a>Welcome  {{ auth()->user()->first_name }}!</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" id="logout">Log Out</a>
                                        </li>
                                        <form action="/logout" id="logout-form" class="hidden" method="post">
                                            @csrf

                                        </form>
                                    </ul>
                                </li>


                            @else
                                <li>
                                    <a href="{{ url('/register') }}">Register</a>

                                </li>
                                <li>

                                    <a style="color: yellow" href="{{ url('/login') }}">Log in</a>

                                </li>
                            @endauth


                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>

<x-flash/>

<!-- Shortcode #2
============================================= -->

{{ $slot }}

<!-- #cta-1 end -->
<footer id="footer" class="footer-1">
    <!-- Contact Bar
    ============================================= -->
    <div class="container footer-widgtes">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="widgets-contact">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-map"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">visit us</p>
                                <p class="text-capitalize font-heading">Podgorica, Crna Gora</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-envelope"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">email us</p>
                                <p class="font-heading">pvukcevic@gmail.com

                                </p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-phone"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">call us</p>
                                <p class="text-capitalize font-heading">+382 67 255 888</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .widget-contact end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

    <!-- Widget Section
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
                <div class="col-xs-12 col-sm-12 col-md-4 widget-about text-center-xs mb-30-xs">
                    <div class="widget-about-logo pull-left pull-none-xs">
                        <img src={{asset("assets/images/logo/footer-logo.png")}} alt="logo"/>
                    </div>
                    <div class="widget-about-info">
                        <h5 class="text-capitalize text-white">p property</h5>
                        <p class="mb-0">P Property is a leading finder of luxury properties all over the World. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
                    <h5 class="text-capitalize text-white">navigation</h5>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="{{ url('about-us') }}"> about us</a>
                                </li>
                                <li>
                                    <a href="{{ url('catalog') }}"> catalog</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}"> contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="{{ url('about-us') }}"> about</a>
                                </li>
                                <li>
                                    <a href="{{ url('catalog') }}"> apartments</a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}"> FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Social bar
    ============================================= -->
    <div class="widget-social">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
                    <div class="widget-social-info pull-left text-capitalize pull-none-xs mb-15-xs">
                        <p class="mb-0">follow us<br>
                            on social networks</p>
                    </div>
                    <div class="widget-social-icon pull-right text-right pull-none-xs">
                        <a href="#">
                            <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" >
                            <i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-vimeo-square"></i><i class="fa fa-vimeo-square"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest"></i><i class="fa fa-pinterest"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-flickr"></i><i class="fa fa-flickr"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-rss"></i><i class="fa fa-rss"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="widget-newsletter-info pull-left text-capitalize pull-none-xs mb-15-xs">
                        <p class="mb-0">subsribe<br>
                            on our newsletter</p>
                    </div>
                    <div class="widget-newsletter-form pull-right text-right">

                        <!-- Mailchimp Form
                        =============================================-->
                        <form action="/newsletter" method="post">
                            @csrf
                            <div class="subscribe-alert">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Type Your Email Account">
                                @error('name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                                <span class="input-group-btn">
								<button class="btn text-capitalize" type="submit">join</button>
								</span>
                            </div>
                            <!-- /input-group -->
                        </form>
                        <!--Mailchimp Form End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center">
                <p class="text-capitalize">© 2022 p property. all rights reserved</p>
                <p class="text-capitalize">With Love by
                    <a href="{{url('http://petarvukcevic.ml')}}">petarvukcevic.ml</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Scripts
============================================= -->
<script src={{asset("assets/js/jquery-2.1.1.min.js")}}></script>
<script src={{asset("assets/js/plugins.js?v=1.0.0")}}></script>
<script src={{asset("assets/js/functions.js?v=1.2.0")}}></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src={{asset("assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0")}}></script>

<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.video.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.slideanims.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.actions.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.kenburn.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.navigation.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.migration.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/revolution/js/extensions/revolution.extension.parallax.min.js")}}></script>

<script type="text/javascript">
    document.querySelector('#logout').addEventListener('click', function() {
        document.querySelector('#logout-form').submit();
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#slider1").revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            delay:6000,
            disableProgressBar:"on",
            spinner:"off",
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                arrows: {
                    style:"arrow",
                    enable:true,
                    hide_onmobile:true,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:110,
                        v_offset:40
                    },
                    right: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:150,
                        v_offset:40
                    }
                }
            },
            gridwidth:1230,
            gridheight:800 ,

        });
    });
</script>

@yield('scripts')
</body>
</html>
