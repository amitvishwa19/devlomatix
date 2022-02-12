<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <title>{{setting('app_name')}}</title>

    <!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="{{asset('public/client/images/logo.png')}}" id="fav-icon" type="image/x-icon">


	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">


	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <!-- Stylesheet -->
    <link href="{{asset('public/client/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/client/assets/dist/css/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/client/assets/dist/css/javascript-plugins-bundle.css')}}" rel="stylesheet"/>

    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('public/client/assets/dist/js/menuzord/css/menuzord.css')}}" rel="stylesheet"/>

    <!-- CSS | timeline -->
    <link href="{{asset('public/client/assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS | Main style file -->
    <link href="{{asset('public/client/assets/dist/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/client/assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>

    <!-- CSS | Responsive media queries -->
    <link href="{{asset('public/client/assets/dist/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="{{asset('public/client/assets/dist/css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('public/client/assets/dist/js/jquery.js')}}"></script>
    <script src="{{asset('public/client/assets/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/client/assets/dist/js/javascript-plugins-bundle.js')}}"></script>
    <script src="{{asset('public/client/assets/dist/js/menuzord/js/menuzord.js')}}"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/client/assets/dist/js/revolution-slider/css/rs6.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
                <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('public/client/assets/dist/js/revolution-slider/js/revolution.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/client/assets/dist/js/revolution-slider/js/rs6.min.js')}}"></script>

</head>

<body class="container-1340px">

    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <header id="header" class="header header-layout-type-header-2rows">
            <!-- <div class="header-top ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                            <ul class="element contact-info">
                                <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +440-98-5298</li>
                                <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i> info@example.com</li>
                                <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> 121 King Street, Melbourne</li>
                            </ul>
                        </div>
                        <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
                            <div class="element">
                                <ul class="header-top-nav list-inline">
                                    <li class="menu-item"><a title="Home" class="menu-item-link" href="#"><strong>Home</strong></a></li>
                                    <li class="menu-item"><a title="Home" class="menu-item-link" href="#"><strong>Cart</strong></a></li>
                                    <li class="menu-item"><a title="Home" class="menu-item-link" href="#"><strong>Contact Us</strong></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed green">
                    <div class="menuzord-container header-nav-container green ">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col">
                                    <div class="row header-nav-col-row">
                                        <div class="col-sm-auto align-self-center">
                                            <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                                                <img class="logo-default logo-1x" src="images/logo-wide.png" alt="Logo">
                                                <img class="logo-default logo-2x retina" src="images/logo-wide%402x.png" alt="Logo">
                                            </a>
                                        </div>
                                        <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                            <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
                                                <ul id="main-nav" class="menuzord-menu">
                                                    <li class="active"><a href="index-mp-layout1.html">Home</a></li>
                                                    <li><a href="page-about.html">About</a></li>
                                                    <!-- <li><a href="#">Pages</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-gallery.html">Gallery</a></li>
                                                            <li><a href="page-team-grid.html">Team Grid</a></li>
                                                            <li><a href="page-team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li><a href="#home">Service</a>
                                                        <ul class="dropdown">
                                                            <li><a href="page-services.html">Service Grid</a></li>
                                                            <li><a href="page-service-details.html">Service Deatils</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog</a>
                                                        <ul class="dropdown">
                                                            <li><a href="news-grid.html">News Grid</a></li>
                                                            <li><a href="news-details.html">News Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="page-contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="row d-block d-xl-none">
                                        <div class="col-12">
                                            <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                                            <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                            </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>