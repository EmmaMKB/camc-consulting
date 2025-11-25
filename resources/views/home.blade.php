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
                                    Votre Partenaire Stratégique en solutions de Marketing Management et de Performance
                                    Organisationnelle en RDC.</h6>
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
                                    Des solutions managériales novatrices, adaptées au marché de la RDC, pour une
                                    compétitivité accrue et une excellence opérationnelle.</h6>
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
    <section id="about-us" class="wow animate__fadeIn cover-background"
        style="background-image:url('images/business-about-bg.jpg');">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 align-items-center">
                <div class="col text-center sm-margin-35px-bottom wow animate__fadeIn">
                    <img src="{{ asset('assets/images/about-1.webp') }}" alt="" class="w-100">
                </div>
                <div class="col padding-six-lr lg-padding-15px-lr text-center text-md-start wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <h3 class="font-weight-600 alt-font text-extra-dark-gray">A propos de nous.</h3>
                    <p>Établie en République Démocratique du Congo (RDC), CAMC Consulting est une entreprise spécialisée
                        dans le Marketing Management et la Formation, entièrement dédiée à l'amélioration de la performance
                        marketing et organisationnelle des entreprises. <br><br>

                        Forts de notre expérience et d'une approche résolument novatrice, nous accompagnons avec succès les
                        organisations de toutes tailles à atteindre leurs objectifs stratégiques. Nous fournissons des
                        solutions managériales sur mesure qui répondent concrètement aux réalités et aux exigences du marché
                        local. <br><br>

                        Notre engagement : Être le moteur de votre croissance et garantir l'impact positif de vos
                        investissements.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- start our services box -->
    <section id="services" class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-5 col-md-12 col-sm-10 padding-eight-right text-center text-lg-start lg-padding-five-right md-padding-fifteen-lr md-margin-80px-bottom sm-padding-15px-lr sm-margin-50px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Nos services</div>
                    <h4 class="font-weight-600 alt-font text-extra-dark-gray margin-35px-bottom sm-margin-25px-bottom">
                        Nous transformons Votre Potentiel en Performance
                        Réelle.
                    </h4>
                    <p class="w-80 lg-w-100">
                        Chez CAMC Consulting, notre rôle est de fournir à votre organisation les leviers stratégiques
                        nécessaires pour prospérer sur le marché congolais. Nous ne faisons pas que conseiller ; nous
                        agissons comme un partenaire stratégique qui apporte une expertise pointue et des solutions
                        novatrices.
                    </p>
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
                                            Conseil commercial et marketing</div>
                                        <p>Propulsez votre croissance : Stratégies commerciales et marketing qui génèrent
                                            des résultats.</p>
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
                                            Gestion des ressources humaines</div>
                                        <p>Optimisez votre capital humain : Des équipes performantes au service de votre
                                            vision d'entreprise.</p>
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
                                            Assistance TVA et Fiscalité</div>
                                        <p>Sécurisez votre conformité : Maîtriser la fiscalité pour une gestion saine et
                                            sans risque.</p>
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
    </section>
    <!-- end our services box -->
    <!-- start feature box section -->
    <section id="why-work" class="bg-extra-dark-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Pourquoi travailler avec nous ?</div>
                    <h5 class="alt-font text-white-2 font-weight-600 mb-0">Nous offrons une expérience inégalée
                        </h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 justify-content-center align-items-center">

                <!-- start services item -->
                <div class="col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin"
                    data-wow-delay="0.2s">
                    <div
                        class="bg-white box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                        <div
                            class="d-inline-block margin-25px-bottom margin-10px-top md-margin-20px-bottom sm-margin-15px-bottom">
                            <i class="fa fa-eye icon-extra-medium text-deep-pink text-white-2"></i>
                        </div>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Notre Vision</div>
                        <p class="w-75 lg-w-90 md-w-85 mx-auto">Être le partenaire incontournable des entreprises pour une
                            performance durable et mesurable.</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col-sm-8 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp last-paragraph-no-margin"
                    data-wow-delay="0.4s">
                    <div
                        class="bg-white box-shadow-light text-center h-100 padding-eighteen-tb feature-box-8 position-relative z-index-5">
                        <div
                            class="d-inline-block margin-25px-bottom margin-10px-top md-margin-20px-bottom sm-margin-15px-bottom">
                            <i class="icon-target icon-extra-medium text-deep-pink text-white-2"></i>
                        </div>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Notre Mission</div>
                        <p class="w-75 lg-w-90 md-w-85 mx-auto">Devenir le levier d'excellence pour nos clients en
                            fournissant des solutions stratégiques et opérationnelles pour une croissance pérenne.</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end services item -->

            </div>
        </div>
    </section>
    <!-- start feature box section -->
    <!-- start contact section -->
    <section id="contact" class="wow animate__fadeIn p-0 bg-light-gray">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col cover-background md-h-550px sm-h-350px wow animate__fadeIn"
                    style="background: url(https://via.placeholder.com/1200x854)"></div>
                <div
                    class="col padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow animate__fadeIn">
                    <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom">Prêt à travailler
                        avec nous ?</div>
                    <h5
                        class="margin-55px-bottom text-color alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom">
                        Entrez en contact avec nous!</h5>
                    <div>
                        <form id="contact-form-2" method="post">
                            <div class="row justify-content-center">
                                <div class="col-12 wow animate__fadeIn text-center">
                                    <div class="form-results d-none"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*"
                                        class="input-border-bottom required">
                                    <input type="email" name="email" id="email" placeholder="E-mail*"
                                        class="input-border-bottom required">
                                    <input type="text" id="subject" name="subject" placeholder="Subject"
                                        class="input-border-bottom">
                                    <textarea name="comment" id="comment" placeholder="Your Message" class="input-border-bottom"></textarea>
                                    <button id="contact-us-button-2" type="submit"
                                        class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top submit">Envoyer
                                        </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
@endsection
