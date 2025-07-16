@extends('frontend.master')
@section('title')
Multi Vandor Ecommerce |App
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

                            <h1 class="title">Multi <span class="theme-gradient">Vendor</span> E-commerce</h1>
                            <p class="subtitle">Launch a Scalable Online Marketplace with Multiple Sellers & Unlimited Potential</p>
                            {{-- <p class="subtitle">Our multi-vendor e-commerce platform allows multiple sellers to showcase
                                their products in one marketplace.</p> --}}
                            <p id="ecommerce-text">
                                Our Multi-Vendor E-commerce platform empowers you to create a robust online marketplace where multiple vendors can register, list their products, manage sales, and deliver a seamless shopping experience under one unified brand. Whether you're building a niche marketplace or a large-scale platform, we provide end-to-end multi-seller eCommerce solutions tailored for high performance, flexibility, and scalability.With powerful vendor management tools, customizable storefronts, and automated commission tracking, our platform gives you everything you need to attract more sellers, reach more customers, and grow revenue—fast.

                            </p>
                            <div class="banner-btn-group mt--30">
                                <a href="#" class="rainbow-gradient-btn" onclick="toggleReadMore(event)" id="readMoreBtn"><span>Read More ...</span></a>
                                </div>
                            {{-- <p>
                                Benefits: Expands product offerings and increases revenue potential.
                                Unique Selling Points: Vendor management tools, commission tracking, and customizable
                                storefronts.
                                Testimonial: "The multi-vendor platform has transformed our marketplace, attracting more
                                sellers and buyers." - Marketplace Client
                                Overall Benefit: Clients will benefit from a diversified product range, increased
                                traffic, and higher sales potential, creating a thriving online marketplace.
                            </p> --}}
                            <div class="banner-btn-group mt--30">
                                <a class="rainbow-gradient-btn" href="contact.html"><span>Get Started</span></a>
                                <a class="rainbow-gradient-btn rainbow-gradient-btn-2" href="#features"><span>Our
                                        Features</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-5 fixed-image">
                        <div class="banner-thumbnail">
                            <img src="{{asset('frontend/assets/images/banner/01 - Multi Vendor Ecommerce/E-commerce1.jpg')}}" alt="Web Design Services">
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
                        <div class="col-md-8 bg-dark card card-body mx-auto py-5">
                            <h5 class="mb-4 mx-auto text-white">Multi-Vendor E-commerce</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Dynamic eCommerce
                                                Management Panel
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" title="Customized Website Design"
                                                class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Customized Responsive
                                                Design
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>SEO Friendly eCommerce
                                                Design
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Clear, User-friendly
                                                Navigation
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Returns and Refunds
                                                Management System
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Online and Offline (POS)
                                                Shop Management System
                                            </a>
                                        </li>

                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Quality Web Content Writing
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Customer Management System
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Product Catalogue
                                                Management
                                            </a>
                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Apps Development
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Promotion and
                                                Discount
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>Payment Gateway Integration
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Inverntory
                                                Management
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Product Barcode
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Reporting Tools
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="ecommerce-with-app.html" class="text-decoration-none">
                                                <i class="fa fa-check me-2 text-success"></i>eCommerce Shipping Delivery
                                                Gateway Integration
                                            </a>
                                        </li>

                                    </ul>
                                </div>
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
                    <!-- New Section Title and E-Commerce Services -->
                    <div class="text-center mb-5">
                        <h5 class="mb-4 mx-auto text-white">E-Commerce Development Services Features</h5>
                        <p class="desc mx-auto" style="max-width: 800px;">
                            Custom E-Commerce Design, Customization of E-Commerce Stores, Shopping Cart Development,
                            E-Commerce Marketplace Development, Plugin and Module Development, Responsive E-Commerce
                            Development,
                            E-Commerce App Development, Payment Gateway Integration, and Maintenance & Support.
                        </p>
                    </div>

                    <!-- Existing Feature Cards -->
                    <div class="row g-4">
                        <!-- Feature 1 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-store fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Custom E-Commerce Design</h5>
                                        <p class="fw-bolder">Stand Out with a Unique Online Store Designed to Convert</p>
                                        <p class="desc"> In the crowded digital marketplace, your eCommerce store needs more than just functionality—it needs personality, performance, and purpose. Our Custom E-Commerce Design service focuses on building completely tailored online stores that reflect your brand identity, offer a smooth user experience, and are optimized for maximum conversion. Unlike cookie-cutter templates, we design every page, element, and user journey from scratch—ensuring your store looks, feels, and functions like no other.Whether you're launching a brand-new eCommerce business or upgrading your existing website, we craft designs that sell—across all devices.</p>
                                        {{-- <p class="desc">We create tailor-made e-commerce website designs that reflect
                                            your brand and drive conversions with a seamless customer experience.</p> --}}
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-tools fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Customization E-Commerce Store</h5>
                                        <p class="fw-bolder">Stand Out with a Unique Online Store Designed to Convert</p>
                                        <p class="desc">In the crowded digital marketplace, your eCommerce store needs more than just functionality—it needs personality, performance, and purpose. Our Custom E-Commerce Design service focuses on building completely tailored online stores that reflect your brand identity, offer a smooth user experience, and are optimized for maximum conversion. Unlike cookie-cutter templates, we design every page, element, and user journey from scratch—ensuring your store looks, feels, and functions like no other.Whether you're launching a brand-new eCommerce business or upgrading your existing website, we craft designs that sell—across all devices.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-shopping-cart fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Shopping Cart Development</h5>
                                        <p class="fw-bolder">Create Seamless, Secure & High-Converting Shopping Cart Experiences</p>
                                        <p class="desc">The shopping cart is one of the most critical elements of your eCommerce website—it’s where browsing turns into buying. Our Shopping Cart Development service focuses on building fast, intuitive, and secure cart systems that reduce abandonment, streamline checkout, and increase your sales. Whether you need a custom-built cart, advanced cart features, or integration with your existing platform, we design smart, conversion-friendly cart systems tailored to your business and customers.We make sure every click counts—from product selection to payment confirmation.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-project-diagram fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">E-Commerce Marketplace Develop</h5>
                                        <p class="fw-bolder">Build Your Own Online Marketplace Like Amazon, Etsy, or Flipkart</p>
                                        <p class="desc"> Looking to create your own online marketplace where multiple sellers can showcase and sell their products? Our E-Commerce Marketplace Development service is designed to help you launch a powerful, scalable, and fully functional multi-vendor platform. Whether you're targeting a niche audience or building a large-scale marketplace, we deliver end-to-end development tailored to your business model, market, and goals.We create secure, user-friendly, and revenue-driven marketplaces that empower vendors, attract buyers, and automate operations.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-puzzle-piece fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Plugin and Module Development</h5>
                                        <p class="fw-bolder">Custom Plugins & Modules That Extend the Power of Your Platform</p>
                                        <p class="desc">Looking to add specific functionality to your website, eCommerce platform, or application? Our Plugin and Module Development service delivers tailored extensions that integrate seamlessly with your existing system—whether it's WordPress, WooCommerce, Shopify, Magento, or a custom-built CMS. From advanced checkout features and dynamic pricing tools to third-party API integrations and automation modules—we create scalable, secure, and performance-optimized solutions built for your unique business needs.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 6 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Responsive eCommerce Development</h5>
                                        <p class="fw-bolder"> Looking to add specific functionality to your website, eCommerce platform, or application? Our Plugin and Module Development service delivers tailored extensions that integrate seamlessly with your existing system—whether it's WordPress, WooCommerce, Shopify, Magento, or a custom-built CMS. From advanced checkout features and dynamic pricing tools to third-party API integrations and automation modules—we create scalable, secure, and performance-optimized solutions built for your unique business needs.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 7 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-mobile fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">E-Commerce App Development</h5>
                                        <p class="fw-bolder">Launch Your Own Mobile Shopping App for Android & iOS</p>
                                        <p class="desc"> With over 75% of online shoppers preferring mobile devices, having a dedicated app is no longer optional—it’s essential. Our E-Commerce App Development service helps you build a fully functional, feature-rich shopping app for Android and iOS that integrates seamlessly with your existing website or operates as a standalone platform. From user-friendly design and secure payment gateways to push notifications and real-time inventory sync—we create mobile apps that boost engagement, drive sales, and elevate your brand.Whether you're a startup, DTC brand, or multi-vendor marketplace, we tailor your app for maximum performance and user experience.</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 8 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-credit-card fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Payment Gateway Integration</h5>
                                        <p class="fw-bolder">Enable Secure, Seamless, and Global Online Payments</p>
                                        <p class="desc">A smooth and secure checkout experience is the key to converting browsers into buyers. Our Payment Gateway Integration service connects your eCommerce website or mobile app to reliable, PCI-compliant payment processors—so your customers can pay effortlessly, and you can receive payments instantly. Whether you're accepting local payments in the UK or handling global transactions from the USA, Canada, or Europe, we ensure fast, flexible, and secure integrations with all major payment gateways.
                                            From one-time purchases to subscriptions and multi-vendor commission splitting—we handle the complete setup for your business model.
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>

                        <!-- Feature 9 -->
                        <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-tools fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">Maintenance & Support</h5>
                                        <p class="fw-bolder">Keep Your Website & Applications Secure, Updated, and Running Smoothly</p>
                                        <p class="desc"> Launching your website or application is just the beginning. Our Maintenance & Support Services ensure your digital platform continues to perform at its best—securely, efficiently, and without interruption. From routine updates and bug fixes to performance monitoring and emergency support, we offer ongoing technical assistance to keep your website, mobile app, or eCommerce store running flawlessly.
                                            Whether you're a small business owner or a global enterprise, we provide tailored maintenance packages that protect your investment and ensure your digital assets remain up-to-date and secure.
                                        </p>
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