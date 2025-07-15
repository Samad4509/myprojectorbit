@extends('frontend.master')
@section('title')
    About Us | Orbit
@endsection
@section('body')
    <!-- Imroz Preloader -->
    <div class="preloader">
        <div class='loader'>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
        </div>
    </div>

    <!-- Start Breadcrumb Area  -->
    <div class="main-content">
        <!-- Start Breadcarumb area  -->
        <div class="breadcrumb-area breadcarumb-style-1 pt--180 pb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-center">
                            <h3 class="title h3">About Us</h3>
                            <ul class="page-list">
                                <li class="rainbow-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="rainbow-breadcrumb-item active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcarumb area  -->
    </div>


    <section class="rainbow-about-story rainbow-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2 class="title">Our Story</h2>
                        <p class="description">Founded in 2023, Orbit has been at the forefront of digital
                            innovation, helping businesses transform their ideas into powerful digital solutions.
                            What started as a small team of passionate developers has grown into a full-service
                            digital agency.</p>
                        <div class="rainbow-splite-style">
                            <div class="split-wrapper">
                                <div class="row g-5">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="rainbow-counterup counterup-style-1">
                                            <h5 class="count-number"><span class="counter-number">50</span>+</h5>
                                            <p class="description">Happy Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="rainbow-counterup counterup-style-1">
                                            <h5 class="count-number"><span class="counter-number">100</span>+</h5>
                                            <p class="description">Projects Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-thumbnail">
                        <img src="{{asset('frontend')}}/assets/images/blog/blog-09.png" alt="Our Team">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rainbow-mission rainbow-section-gap bg-color-extra2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Our Mission & Values</h2>
                        <p class="subtitle">What drives us every day</p>
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rainbox-box box-style-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Mission</h4>
                                <p class="description">To empower businesses with innovative digital solutions that
                                    drive growth and efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rainbox-box box-style-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Vision</h4>
                                <p class="description">To be the most trusted digital partner for businesses
                                    worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rainbox-box box-style-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Values</h4>
                                <p class="description">Innovation, Integrity, Excellence, and Customer Success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rainbow-team rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Meet Our Team</h2>
                        <p class="subtitle">The talented people behind Orbit</p>
                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-team team-style-default">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="{{asset('frontend')}}/assets/images/blog/blog-08.png" alt="Team Member">
                            </div>
                            <div class="content">
                                <h4 class="title">John Smith</h4>
                                <p class="designation">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other team members -->
            </div>
        </div>
    </section>
    <!-- Start Brand Area -->
    <div class="rainbow-brand-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title rating-title text-center sal-animate" data-sal="slide-up"
                        data-sal-duration="700" data-sal-delay="100">
                        <p class="b1 mb--0 small-title theme-gradient">Our Brands</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt--10">
                    <ul class="brand-list brand-style-2 slider-brand slider-brand-activation">
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/strapi.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/mapbox.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/stenciljs.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/spotify.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/woocommerce.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/slack.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/strapi.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/mapbox.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/stenciljs.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/spotify.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/woocommerce.png"
                                    alt="Brand Image"></a></li>
                        <li class="slide-single-layout"><a href="#"><img src="{{asset('frontend')}}/assets/images/brand/slack.png"
                                    alt="Brand Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
