@extends('layouts.master')

@section('content')
    <!-- start slider section -->
    <section class="p-0 position-relative overflow-visible wow animate__fadeIn">
        <div class="swiper full-screen white-move md-landscape-h-580px sm-h-500px"
            data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/images/banner/banner-1.webp') }}');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div
                                    class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">
                                    Impactons votre business.</div>
                                <h6
                                    class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">
                                    Votre Partenaire Stratégique en solutions de Marketing Management et de Performance Organisationnelle en RDC.</h6>
                                <div><a href="#" target="_blank"
                                        class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Entrez en contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/images/banner/banner-2.webp') }}');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div
                                    class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">
                                    Performance durable</div>
                                <h6
                                    class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">
                                    Nous assurons la croissance de votre organisation.</h6>
                                <div><a href="#" target="_blank"
                                        class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Purchase Pofo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/images/banner/banner-3.webp') }}');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div
                                    class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">
                                    Innovation, Gestion et Réussite</div>
                                <h6
                                    class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">
                                    Des solutions managériales novatrices, adaptées au marché de la RDC, pour une compétitivité accrue et une excellence opérationnelle.</h6>
                                <div><a href="#" target="_blank"
                                        class="btn btn-deep-pink btn-rounded btn-medium no-margin-lr">Entrez en contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <!--<div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>-->
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <div class="swiper-button-next-nav swiper-button-next arrow-light arrow-big slider-navigation-style-01"><i
                    class="fa-solid fa-angle-right"></i></div>
            <div class="swiper-button-previous-nav swiper-button-prev arrow-light arrow-big slider-navigation-style-01"><i
                    class="fa-solid fa-angle-left"></i></div>
            <!-- end slider navigation -->
        </div>
        <!-- scroll down arrow -->
        <div class="scroll-down-section text-center"><a href="#about"
                class="inner-link text-uppercase text-small text-white-2 text-white-2-hover opacity5 margin-10px-bottom d-inline-block">scrollez
                </a>
            <div class="separator-line-verticle-large bg-deep-pink m-auto"></div>
        </div>
        <!-- start slider pagination -->
    </section>
    <!-- end slider section -->
    <!-- start about section -->
    {{-- <section id="about" class="wow animate__fadeIn cover-background"
        style="background-image:url('images/business-about-bg.jpg');">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center">
                <div class="col text-center sm-margin-35px-bottom wow animate__fadeIn">
                    <img src="https://via.placeholder.com/580x640" alt="" class="w-100">
                </div>
                <div class="col padding-six-lr lg-padding-15px-lr text-center text-md-start wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <h3 class="font-weight-600 alt-font text-extra-dark-gray">We combine design, thinking and craft.</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been
                        the industry’s standard dummy text since.</p>
                    <a href="about-us-modern.html"
                        class="btn btn-small btn-rounded btn-dark-gray margin-20px-top sm-margin-5px-top">explore more</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end about section -->
    <!-- start feature section -->
    {{-- <section class="wow animate__fadeIn cover-background" style="background-image:url('images/business-digital-bg.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-md-6 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Easy way to build
                        websites</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">A digital studio crafting beautiful
                        experiences.</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                <!-- start feature box item -->
                <div class="col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <div
                        class="bg-white text-center border-radius-10 h-100 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">01</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Discover talent</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        <a href="#" class="btn btn-link text-extra-dark-gray text-deep-pink-hover btn-medium">view
                            more</a>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div
                        class="bg-white text-center border-radius-10 h-100 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">02</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Expert analysis</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        <a href="#" class="btn btn-link text-extra-dark-gray text-deep-pink-hover btn-medium">view
                            more</a>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-sm-8 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div
                        class="bg-white text-center border-radius-10 h-100 padding-eighteen-all position-relative lg-padding-twelve-all">
                        <h4 class="text-light-gray text-deep-pink alt-font font-weight-300 margin-20px-bottom">03</h4>
                        <div
                            class="alt-font text-large text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-600">
                            Explore work</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        <a href="#" class="btn btn-link text-extra-dark-gray text-deep-pink-hover btn-medium">view
                            more</a>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section> --}}
    <!-- end feature section -->
    <!-- start portfolio section -->
    {{-- <section class="wow animate__fadeIn no-padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-md-6 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Our recent works
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">New stunning projects for our amazing
                        clients</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 filter-content overflow-hidden">
                    <ul
                        class="hover-option7 portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp">
                            <a href="single-project-page-01.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x800"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Naked
                                                        Soap</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Web and
                                                        Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-02.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x1200"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Berlin
                                                        Design</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Branding
                                                        and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-03.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x800"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Abstract
                                                        Comics</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Branding
                                                        and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.6s">
                            <a href="single-project-page-04.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x1200"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Teabag
                                                        Collection</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Web and
                                                        Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio-item item -->
                        <li class="grid-item wow animate__fadeInUp">
                            <a href="single-project-page-05.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x1200"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Herbal
                                                        Beauty Salon</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Branding
                                                        and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s">
                            <a href="single-project-page-06.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x1200"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Tailoring
                                                        Interior</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Branding
                                                        and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s">
                            <a href="single-project-page-07.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x800"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Pixflow
                                                        Studio</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Branding
                                                        and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.6s">
                            <a href="single-project-page-08.html">
                                <figure>
                                    <div class="portfolio-img"><img src="https://via.placeholder.com/800x800"
                                            alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <span
                                                        class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Designblast
                                                        Inc</span>
                                                    <p class="text-medium-gray text-uppercase text-extra-small">Web and
                                                        Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end portfolio section -->
    <!-- start our services box -->
    {{-- <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-5 col-md-12 col-sm-10 padding-eight-right text-center text-lg-start lg-padding-five-right md-padding-fifteen-lr md-margin-80px-bottom sm-padding-15px-lr sm-margin-50px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Our services</div>
                    <h4 class="font-weight-600 alt-font text-extra-dark-gray margin-35px-bottom sm-margin-25px-bottom">We
                        are deliver beautiful digital products for you</h4>
                    <p class="w-80 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been industry's standard dummy text ever since when an unknown.</p>
                    <a href="services-classic.html"
                        class="btn btn-small btn-rounded btn-transparent-dark-gray margin-10px-top">View all services</a>
                </div>
                <div class="col-xl-6 col-lg-7 col-sm-10">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col text-center">
                            <div class="row row-cols-1">
                                <!-- start feature box item -->
                                <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                    <div
                                        class="feature-box-18 bg-light-gray text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-hotairballoon text-deep-pink icon-large margin-25px-bottom"></i>
                                        <div
                                            class="alt-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">
                                            Digital Branding</div>
                                        <p>Lorem Ipsum is simply dummy printing typesetting industry.</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </div>
                                <!-- end feature box item -->
                                <!-- start feature box item -->
                                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                                    <div
                                        class="feature-box-18 bg-light-gray text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-strategy text-deep-pink icon-large margin-25px-bottom"></i>
                                        <div
                                            class="alt-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">
                                            Graphic Design</div>
                                        <p>Lorem Ipsum is simply dummy printing typesetting industry.</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </div>
                                <!-- end feature box item -->
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row row-cols-1">
                                <!-- start feature box item -->
                                <div class="col margin-40px-top margin-30px-bottom sm-margin-30px-top xs-margin-15px-tb wow animate__fadeIn"
                                    data-wow-delay="0.4s">
                                    <div
                                        class="feature-box-18 bg-light-gray text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-layers text-deep-pink icon-large margin-25px-bottom"></i>
                                        <div
                                            class="alt-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">
                                            Web Interactive</div>
                                        <p>Lorem Ipsum is simply dummy printing typesetting industry.</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </div>
                                <!-- end feature box item -->
                                <!-- start feature box item -->
                                <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                                    <div
                                        class="feature-box-18 bg-light-gray text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-shield text-deep-pink icon-large margin-25px-bottom"></i>
                                        <div
                                            class="alt-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">
                                            Powerful Options</div>
                                        <p>Lorem Ipsum is simply dummy printing typesetting industry.</p>
                                        <div class="feature-box-overlay bg-deep-pink"></div>
                                    </div>
                                </div>
                                <!-- end feature box item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end our services box -->
    <!-- start video section -->
    {{-- <section class="p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-6 cover-background md-h-500px sm-h-400px overflow-visible wow animate__fadeInLeft"
                    style="background-image:url('https://via.placeholder.com/1105x710');">
                    <a class="popup-youtube icon-play-style-2 absolute-middle-center"
                        href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                        <span>
                            <span class="video-icon bg-gradient-light-red-light-orange box-shadow-large"><i
                                    class="fa fa-play text-white-2 margin-5px-left" aria-hidden="true"></i></span>
                        </span>
                    </a>
                </div>
                <div class="col-xl-5 col-lg-6 padding-eight-half-all xl-padding-seven-all wow animate__fadeInRight">
                    <h4
                        class="alt-font text-black font-weight-600 margin-45px-bottom md-margin-25px-bottom sm-margin-20px-bottom">
                        We provide solutions to grow your business</h4>
                    <p class="margin-35px-bottom w-95 md-margin-25px-bottom sm-w-100">Lorem Ipsum is simply dummy text
                        printing and typesetting industry been the industry's standard dummy text ever since when an unknown
                        printer took a galley of type and scrambled</p>
                    <ul class="list-style-12 margin-35px-top">
                        <li>Let’s collaborate make an impact in the business</li>
                        <li>A satisfied customer is the best business starts</li>
                        <li>Expertise to build the things that matter for you</li>
                    </ul>
                    <a href="services-simple.html"
                        class="btn btn-small btn-rounded btn-dark-gray margin-40px-top sm-margin-25px-top">View all
                        services</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end video section -->
    <!-- start teamwork section -->
    {{-- <section class="big-section cover-background h-850px lg-h-700px sm-h-400px wow animate__fadeIn"
        style="background-image:url('https://via.placeholder.com/1920x855');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-md-6 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Creative People
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Teamwork builds trust and the trust
                        build growth</h5>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end teamwork section -->
    <!-- start blog section -->
    {{-- <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Latest Blogs</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Publish what you think, don't put it on
                        social media</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content">
                    <ul
                        class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog post item -->
                        <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                            <div class="blog-post bg-light-gray">
                                <div class="blog-post-images overflow-hidden position-relative">
                                    <a href="blog-post-layout-01.html">
                                        <img src="https://via.placeholder.com/900x632" alt="">
                                        <div class="blog-hover-icon"><span
                                                class="text-extra-large font-weight-300">+</span></div>
                                    </a>
                                </div>
                                <div class="post-details padding-40px-all md-padding-20px-all">
                                    <a href="blog-post-layout-01.html"
                                        class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I
                                        find modernist design, but it so much faster!</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum standard dummy...</p>
                                    <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    <div class="author">
                                        <span
                                            class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by
                                            <a href="blog-grid.html" class="text-medium-gray">Jay
                                                Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 August 2020</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp"
                            data-wow-delay="0.2s">
                            <div class="blog-post bg-light-gray">
                                <div class="blog-post-images overflow-hidden position-relative">
                                    <a href="blog-post-layout-01.html">
                                        <img src="https://via.placeholder.com/900x632" alt="">
                                        <div class="blog-hover-icon"><span
                                                class="text-extra-large font-weight-300">+</span></div>
                                    </a>
                                </div>
                                <div class="post-details padding-40px-all md-padding-20px-all">
                                    <a href="blog-post-layout-01.html"
                                        class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Being
                                        a famous designer is like being a famous dentist.</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum standard dummy...</p>
                                    <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    <div class="author">
                                        <span
                                            class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by
                                            <a href="blog-grid.html" class="text-medium-gray">Herman
                                                Miller</a>&nbsp;&nbsp;|&nbsp;&nbsp;18 August 2020</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp"
                            data-wow-delay="0.4s">
                            <div class="blog-post bg-light-gray">
                                <div class="blog-post-images overflow-hidden position-relative">
                                    <a href="blog-post-layout-01.html">
                                        <img src="https://via.placeholder.com/900x632" alt="">
                                        <div class="blog-hover-icon"><span
                                                class="text-extra-large font-weight-300">+</span></div>
                                    </a>
                                </div>
                                <div class="post-details padding-40px-all md-padding-20px-all">
                                    <a href="blog-post-layout-01.html"
                                        class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Designers
                                        are meant to be loved, not to be understood.</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum standard dummy....</p>
                                    <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                    <div class="author">
                                        <span
                                            class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by
                                            <a href="blog-grid.html" class="text-medium-gray">Hugh
                                                Macleod</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 August 2020</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog post item -->
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end blog section -->
@endsection
