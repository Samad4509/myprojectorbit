@extends('frontend.master')
@section('title')
Web Design And Development | Orbit
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
                    
                    <h1 class="title">Web Design  <span class="theme-gradient">&</span> Development</h1>
                    <p class="subtitle">Custom-Built Websites That Captivate, Convert, and Elevate Your Bran</p>
                    <p id="ecommerce-text">
                        Your website is often the first impression your audience gets of your business—make it count. Our Professional Web Design Services are tailored to create visually appealing, responsive, and SEO-optimized websites that reflect your brand identity and engage your audience across all devices.
                        From sleek corporate websites to high-converting eCommerce platforms, we deliver custom web design solutions that are easy to navigate, fast to load, and built for results. Whether you’re a startup, small business, or growing enterprise, our team will help you stand out online and turn clicks into customers.
                    </p>
                     <div class="banner-btn-group mt--30">
                                <a href="#" class="rainbow-gradient-btn" onclick="toggleReadMore(event)" id="readMoreBtn"><span>Read More ...</span></a>
                                </div>
                    <div class="banner-btn-group mt--30">
                        <a class="rainbow-gradient-btn" href="contact.html"><span>Get Started</span></a>
                        <a class="rainbow-gradient-btn rainbow-gradient-btn-2" href="#features"><span>Our Features</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="banner-thumbnail fixed-image">
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
                        <div class="col-md-8 bg-dark card card-body mx-auto py-5">
                            <h5 class="mb-4 mx-auto text-white">Professional Web Design Service</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="list-unstyled">
                                        <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Dynamic Website Management Panel
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" title="Customized Website Design" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Customized Website Design
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Responsive Website Design
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>High Security Standard
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Search Engine Friendly
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Website Hosting
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Quality Web Content Writing
                                        </a>
                                    </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Web Application Development
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Simple and Professional Web Design
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Clear & User-friendly Design
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Best Webpage Speed
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Easy to update
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
                        <h4 class="subtitle">
                            <h5 class="mb-4 mx-auto text-white">Using Technology for Professional Development</h5>

                        </h4>
                    </div>
                </div>
                <div class="row g-4 justify-content-center align-items-center text-center">
                    <!-- Example Tech Logos -->
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="img-fluid tech-logo">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="img-fluid tech-logo">
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
                            <h5 class="mb-4 mx-auto text-white">Features</h5>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-desktop fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Responsive Web Design</h5>
                                <p class="fw-bolder">Mobile-First, Cross-Device Website Design for a Seamless User Experience</p>
                                <p class="desc"> In today’s digital world, users access websites from smartphones, tablets, laptops, and desktops—and your business needs to deliver a flawless experience on all of them. Our Responsive Web Design Services ensure that your website looks stunning, loads fast, and functions perfectly across every screen size and device.We use the latest mobile-first design practices to craft websites that adapt automatically, improve SEO rankings, and boost user engagement. Whether you’re launching a new site or upgrading an existing one, responsive design is a must for success in 2024 and beyond.</p>
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
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Dynamic & User-Friendly Web Design</h5>
                                <p class="fw-bolder">Engaging, Interactive, and Easy-to-Use Websites Built for Modern Users</p>
                                <p class="desc"> In the digital age, users expect more than just a static webpage—they want interaction, personalization, and seamless navigation. Our Dynamic & User-Friendly Web Design services are crafted to deliver smart, interactive websites that respond to user actions, load quickly, and provide a fluid user experience across all devices.From interactive features and personalized content to admin-friendly dashboards, we build dynamic websites that are easy for your team to manage and enjoyable for your visitors to explore.</p>
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
                                <i class="fas fa-share-alt fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Social Media Integration Services</h5>
                                <p class="fw-bolder">Connect Your Website with Facebook, Instagram, LinkedIn & More for Maximum Reach</p>
                                <p class="desc"> Your audience lives on social media—so your website should too. Our Social Media Integration Services connect your website directly to your social channels, enabling seamless engagement, real-time content sharing, and cross-platform visibility.
                                    From embedding live feeds to adding share buttons and social logins, we ensure your brand stays connected, visible, and interactive across all major platforms including Facebook, Instagram, LinkedIn, Twitter, YouTube, and TikTok.
                                </p>
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
                                <i class="fas fa-search fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Professional SEO Services</h5>
                                <p class="fw-bolder">Boost Your Visibility, Rank Higher on Google, and Attract More Customers Organically</p>
                                <p class="desc">In today’s digital-first world, search engine visibility is key to business success. Our Professional SEO Services help your website climb search engine rankings, attract qualified traffic, and convert visitors into loyal customers. Whether you're targeting local searches or competing globally, our tailored SEO strategies ensure your brand gets found by the right audience.
                                    From technical audits and keyword research to on-page optimization, backlink building, and content strategy, we deliver ethical, data-driven SEO campaigns that bring measurable results.
                                </p>
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
                                <i class="fas fa-paint-brush fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Unique Design Services</h5>
                                <p class="fw-bolder">Stand Out Online with One-of-a-Kind, Brand-Focused Web Design Solutions</p>
                                <p class="desc"> In a world of lookalike templates and generic websites, your business deserves a digital presence that’s truly unique. Our Unique Design Services focus on crafting visually stunning, brand-aligned, and fully custom website designs that set you apart from competitors and leave a lasting impression on visitors.
                                    We don’t just design websites—we build digital experiences tailored to your brand's personality, voice, and target audience. From typography and color palettes to custom layouts and animations, everything is created from scratch to reflect your identity and vision.
                                </p>
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
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                            <div class="description centered-shape">
                                <h5 class="title text-white">Web Security Services</h5>
                                <p class="fw-bolder">Protect Your Website from Hackers, Malware & Data Breaches—24/7</p>

                                <p class="desc">In an era of rising cyber threats, website security is no longer optional—it's essential. Our Web Security Services provide end-to-end protection to keep your website, customer data, and digital assets safe from attacks, breaches, and downtime.
                                    We implement industry-standard security protocols, real-time monitoring, and automated backups to safeguard your site against malware, DDoS attacks, spam, phishing, and data theft. Whether you're running an e-commerce store, a business site, or a custom application, we ensure your platform is secure, reliable, and GDPR-compliant.
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