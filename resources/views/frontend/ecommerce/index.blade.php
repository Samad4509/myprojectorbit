@extends('frontend.master')
@section('title')
E-commerce with app | Orbit
@endsection

@section('body')
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
                            <h1 class="title">{{$item->banner_title}}</h1>
                            {{-- <p class="subtitle">Our e-commerce solutions include mobile applications for a seamless
                                shopping experience.</p> --}}
                            <p class="subtitle">{{$item->banner_subtitle}}</p>
                                <p id="ecommerce-text">
                                    {{$item->banner_description}}
                                </p>

                                <div class="banner-btn-group mt--30">
                                <a href="#" class="rainbow-gradient-btn" onclick="toggleReadMore(event)" id="readMoreBtn"><span>Read More ...</span></a>
                                </div>
                            
                            <div class="banner-btn-group mt--30">
                                <a class="rainbow-gradient-btn" href="contact.html"><span>Get Started</span></a>
                                <a class="rainbow-gradient-btn rainbow-gradient-btn-2" href="#features"><span>Our
                                        Features</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-5 fixed-image">
                        <div class="">
                            <img src="{{asset($item->banner_image)}}" alt="Web Design Services">
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
                        <div class="col- bg-dark card card-body mx-auto py-5">
                            <h5 class="mb-4 mx-auto text-white">{{$item->banner_title}}</h5>
                            <div class="row">
                                <td class="bg-dark">{!! $item->product_features !!}</td>
                            </div>
                            <div class="banner-btn-group mt--30 mx-auto">
                                <a class="rainbow-gradient-btn" href="{{route('contact')}}"><span>Contact us</span></a>
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
                        <h5 class="mb-4 mx-auto text-white">Using Technology for Professional Development</h5>
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
                                <h5 class="mb-4 mx-auto text-white">E-commerce(With App) Features</h5>
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
                                        <h5 class="title text-white">Custom E-Commerce Design</h5>
                                        <p class="fw-bold">Tailored Online Store Designs That Drive Sales & Reflect Your Brand</p>
                                        <p class="desc"> In a world of generic templates, your business deserves more. Our Custom E-Commerce Design service delivers unique, professionally crafted online stores that align with your brand identity, attract your ideal customers, and convert visitors into buyers. Whether you're launching a new store or upgrading an existing one, we design high-converting eCommerce websites from scratch—no cookie-cutter layouts.</p>
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
                                        <h5 class="title text-white">Customised Online Store Functionality</h5>
                                        <p class="fw-bold">Tailored Features That Match Your Business Workflow and Boost Conversions</p>
                                        <p class="desc">Your business is unique—your eCommerce functionality should be too. Our Customised Online Store Functionality service helps you go beyond standard templates by integrating advanced, business-specific features into your online store. Whether you need a custom product builder, location-based pricing, tiered membership options, or multi-language support—we develop it just for you. Our goal is to create a seamless shopping experience tailored to your users while supporting your operational needs.</p>
                                        {{-- <p class="desc">We customize your online store features, layout, and
                                            functionality to meet specific business requirements.</p> --}}
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
                                        <h5 class="title text-white">Shopping Cart Development</h5>
                                        <p class="fw-bolder">Build Fast, Secure & Conversion-Focused Shopping Carts for Your Online Store</p>
                                        <p> A well-optimized shopping cart is the heart of any successful eCommerce store. Our Shopping Cart Development service ensures a seamless, secure, and user-friendly cart experience that reduces cart abandonment and increases conversions. Whether you're building a new store or upgrading an existing one, we develop custom shopping cart systems that align with your business logic, user journey, and industry standards.From simple product checkout to complex multi-vendor cart systems—we build it all, fully tailored to your needs.</p>
                                        {{-- <p class="desc">Build Fast, Secure & Conversion-Focused Shopping Carts for Your Online Store</p> --}}
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
                                        <h5 class="title text-white">E-Commerce Marketplace Development</h5>
                                        <p class="fw-bolder">Build Scalable Multi-Vendor Marketplaces Like Amazon, Etsy, or Flipkart</p>
                                        <p class="desc"> Looking to launch the next big online marketplace? Our E-Commerce Marketplace Development service helps you create powerful, secure, and feature-rich multi-vendor platforms where multiple sellers can register, list products, and manage their own storefronts. Whether you’re targeting a specific niche or aiming for a large-scale marketplace, we develop fully customized solutions tailored to your brand, industry, and audience.From vendor management to commission logic, real-time inventory syncing, and seamless payment splits—we deliver everything you need to run a successful online marketplace</p>
                                        {{-- <p class="desc">Launch your multi-vendor marketplace with full-scale features,
                                            from vendor management to commission setup.</p> --}}
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
                                        <h5 class="title text-white">Plugin and Module Development</h5>
                                        <p class="fw-bolder">Custom-Built Plugins & Modules to Extend the Power of Your Online Store</p>
                                        <p class="desc">Want to enhance your website or online store with extra functionality? Our Plugin and Module Development service delivers tailor-made extensions that seamlessly integrate into your platform—whether you're on WordPress, WooCommerce, Shopify, Magento, or using a custom CMS. From payment gateways and shipping calculators to loyalty programs and API integrations—we build secure, scalable, and performance-optimized plugins to match your exact business needs.</p>
                                        {{-- <p class="desc">We create custom plugins and modules to extend your e-commerce
                                            platform’s capabilities.</p> --}}
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
                                        <h5 class="title text-white">Responsive eCommerce Development</h5>
                                        <p class="fw-bolder">Deliver Seamless Shopping Experiences Across All Devices</p>
                                        <p class="desc"> In today’s mobile-first world, your customers shop from everywhere—phones, tablets, laptops, and desktops. Our Responsive eCommerce Development service ensures your online store looks stunning and functions perfectly on all screen sizes. Whether you're launching a new eCommerce site or revamping an existing one, we design and develop responsive websites that provide a consistent, user-friendly experience across every device.This boosts engagement, lowers bounce rates, and increases your conversion rate—especially from mobile users.</p>
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
                                        <h5 class="title text-white">E-Commerce App Development</h5>
                                        <p class="fw-boder">Power Your Online Store with High-Converting Android & iOS Shopping Apps</p>
                                        <p class="desc"> Take your online business to the next level with our E-Commerce App Development service. We build powerful, user-friendly, and conversion-focused mobile apps for your eCommerce store—compatible with Android and iOS devices. Whether you're a small business or a growing brand, we create custom eCommerce apps that reflect your brand, sync seamlessly with your website, and deliver an exceptional mobile shopping experience.Mobile commerce is the future—and we help you stay ahead with fast, responsive, and scalable shopping apps tailored to your customers.</p>
                                        {{-- <p class="desc">Build Android and iOS mobile commerce apps that improve customer
                                            engagement and retention.</p> --}}
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
                                        <h5 class="title text-white">Payment Gateway Integration</h5>
                                        <p class="fs-bolder">Accept Secure, Seamless Payments on Your Website or App</p>
                                        <p class="desc">A reliable, user-friendly payment system is the backbone of every successful eCommerce business. Our Payment Gateway Integration service enables you to accept online payments quickly, securely, and globally. We integrate your online store or mobile app with trusted </p>
                                        {{-- <p class="desc">Seamless integration of secure and popular payment gateways like
                                            PayPal, Stripe, Razorpay, etc.</p> --}}
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