@extends('frontend.master')
@section('title')
Hosting | Orbit
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
        <!-- Start Banner Area -->
        <section class="rainbow-banner-area rainbow-banner-style-2 rainbow-section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="title">Hosting <span class="theme-gradient"></span> Site</h1>
                            <p class="subtitle">Our housing site solutions connect buyers and sellers in the real estate
                                market.</p>
                            <p>Benefits: Simplifies property listings and enhances user experience.
                                Unique Selling Points: Advanced search filters, virtual tours, and integrated payment
                                options.
                                Testimonial: "The housing site has made it easier for us to connect with potential
                                buyers." - Real Estate Client
                                Overall Benefit: Clients will benefit from a streamlined process for buying and selling
                                properties, leading to faster transactions and increased sales.</p>
                            <div class="banner-btn-group mt--30">
                                <a class="rainbow-gradient-btn" href="contact.html"><span>Get Started</span></a>
                                <a class="rainbow-gradient-btn rainbow-gradient-btn-2" href="#features"><span>Our
                                        Features</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-5">
                        <div class="">
                            <img src="{{asset('frontend')}}/assets/webdesign/website-devlopment.jpg" alt="Web Design Services">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <section class="py-5 hero-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="col-md-8 bg-dark card card-body mx-auto py-5 text-white">
                            <h5 class="mb-4 text-center">Hosting Site</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>99.9% Uptime Guarantee
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Free SSL Certificate
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Unlimited Bandwidth
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>cPanel & One-Click Installer
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>24/7 Technical Support
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Daily Backups
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Free Domain Registration
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Malware Scanning & Removal
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Email Hosting Included
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Firewall & DDoS Protection
                                        </li>
                                        <li class="mb-2">
                                            <i class="fa fa-check me-2 text-success"></i>Fast SSD Storage
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Storage Packages -->
                            <div class="mt-5">
                                <h5 class="text-center mb-4">Hosting Storage Packages</h5>
                                <div class="row text-center">
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 bg-light text-dark rounded">
                                            <h6>Basic Plan</h6>
                                            <p>10 GB SSD Storage</p>
                                            <p>1 Website</p>
                                            <p>Free SSL & Email</p>
                                            <strong>$2.99/month</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 bg-light text-dark rounded">
                                            <h6>Standard Plan</h6>
                                            <p>50 GB SSD Storage</p>
                                            <p>5 Websites</p>
                                            <p>Daily Backups + Free SSL</p>
                                            <strong>$5.99/month</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 bg-light text-dark rounded">
                                            <h6>Premium Plan</h6>
                                            <p>Unlimited SSD Storage</p>
                                            <p>Unlimited Websites</p>
                                            <p>Free Domain + Priority Support</p>
                                            <strong>$9.99/month</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="contact.html" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12 text-center">
                        <h4 class="subtitle">
                            <span class="theme-gradient">Using Technology for Professional Development</span>
                        </h4>
                    </div>
                </div>
                <div class="row g-4 justify-content-center align-items-center text-center">
                    <!-- Example Tech Logos -->
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                            alt="HTML5" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"
                            class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                            alt="JavaScript" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                            alt="Bootstrap" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                            alt="React" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                            alt="Node.js" class="img-fluid tech-logo">
                    </div>
                    <!-- Add more logos as needed -->
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-12 mx-auto">
                            <div class="section-title text-center">
                                <h4 class="subtitle">
                                    <span class="theme-gradient">E-commerce(With App) Features</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Custom E-Commerce Design -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-paint-brush fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Custom E-Commerce Design</h5>
                                        <p class="desc">We provide tailored e-commerce website design solutions that
                                            reflect your brand identity and maximize conversions.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Customization E-Commerce Store -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-store fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Customization E-Commerce Store</h5>
                                        <p class="desc">We customize your online store features, layout, and
                                            functionality to meet specific business requirements.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Shopping Cart Development -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Shopping Cart Development</h5>
                                        <p class="desc">Robust and user-friendly shopping cart solutions that support
                                            secure and smooth online purchases.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- E-Commerce Marketplace Development -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-store-alt fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">E-Commerce Marketplace Develop</h5>
                                        <p class="desc">Launch your multi-vendor marketplace with full-scale features,
                                            from vendor management to commission setup.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Plugin and Module Development -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-puzzle-piece fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Plugin and Module Development</h5>
                                        <p class="desc">We create custom plugins and modules to extend your e-commerce
                                            platform’s capabilities.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Responsive eCommerce Development -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Responsive eCommerce Development</h5>
                                        <p class="desc">We build mobile-friendly, responsive e-commerce websites
                                            optimized for all devices and browsers.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- E-Commerce App Development -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-mobile-screen-button fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">E-Commerce App Development</h5>
                                        <p class="desc">Build Android and iOS mobile commerce apps that improve customer
                                            engagement and retention.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Payment Gateway Integration -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-credit-card fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title">Payment Gateway Integration</h5>
                                        <p class="desc">Seamless integration of secure and popular payment gateways like
                                            PayPal, Stripe, Razorpay, etc.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
  @endsection