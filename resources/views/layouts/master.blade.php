<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>CAMC Consulting - Ensemble, impactons votre business</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootsnav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width white-link navbar-expand-lg menu-center border-white-light border-bottom">
                <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto col-lg-2 ps-0">
                        <a href="{{ route('home') }}" title="CAMC Consulting" class="logo"><img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo@2x.png') }}" class="logo-dark" alt="CAMC"><img src="{{ asset('assets/images/logo-white.png') }}" data-at2x="{{ asset('assets/images/logo-white@2x.png') }}" alt="CAMC" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu px-0">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                                <li class="">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="#services">Our Services</a>
                                </li>
                                <li>
                                    <a href="#why-work">About Us</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 pe-0 text-end d-none d-md-block">
                        <div class="header-social-icon d-none d-md-inline-block no-border-left no-padding-left no-margin-left">
                            <a href="https://www.linkedin.com/company/camc-consulting/" title="Facebook" target="_blank"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->

        @yield('content')

        <!-- start footer -->
        <footer class="footer-strip-dark bg-extra-dark-gray padding-90px-tb lg-padding-70px-tb md-padding-50px-tb sm-padding-40px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 text-center text-md-start sm-margin-30px-bottom">
                        <h5 class="text-white margin-5px-bottom">Ensemble, impactons votre Business</h5>
                        <span class="text-medium">Nous vous offrons une expertise de pointe pour optimiser votre entreprise</span>
                    </div>
                    <div class="col-lg-4 col-md-5 text-center text-md-end">
                    </div>
                </div>
                <div class="border-top border-color-medium-dark-gray padding-80px-top margin-80px-top lg-padding-60px-top lg-margin-60px-top md-padding-50px-top md-margin-50px-top sm-padding-40px-top sm-margin-40px-top">
                    <div class="row align-items-center">
                        <!-- start logo -->
                        <div class="col-lg-3 text-center text-md-start md-margin-50px-bottom sm-margin-30px-bottom">
                            <a href="{{ route('home') }}"><img class="footer-logo" src="{{ asset('assets/images/logo-white.png') }}" data-at2x="{{ asset('assets/images/logo-white@2x.png') }}" alt="CAMC"></a>
                        </div>
                        <!-- end logo -->
                        <!-- start copyright -->
                        <div class="col-lg-4 col-md-5 sm-margin-30px-bottom text-medium text-center text-md-start">
                            Lubumbashi, Haut-Katanga,<br>
                            République Démocratique du Congo.
                        </div>
                        <div class="col-lg-3 col-md-4 sm-margin-30px-bottom text-medium text-center text-md-start">
                            +243 894 184 975<br>
                            <a href="mailto:info@camc-consulting.com">info@camc-consulting.com</a>
                        </div>
                        <!-- end copyright -->
                        <!-- start social media -->
                        <div class="col-lg-2 col-md-3 text-center text-md-end">
                            <div class="social-icon-style-8 d-inline-block align-middle">
                                <ul class="small-icon mb-0">
                                    <li><a class="linkedin text-white-2" href="https://www.linkedin.com/company/camc-consulting/" target="_blank"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootsnav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/hamburger-menu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/theme-vendors.min.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
