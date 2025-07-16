@extends('frontend.master')
@section('titile')
News Portal | Orbit
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
                        <h1 class="title">News  <span class="theme-gradient">Web Design</span> Services</h1>
                        <p class="subtitle">Launch a Powerful News Portal That Informs, Engages & Converts.</p>
                        <p id="ecommerce-text">
                                    In today’s fast-paced digital world, a well-designed news portal is essential for attracting and retaining readers. Our News Web Design Services help media houses, journalists, bloggers, and publishers build robust, responsive, and SEO-optimized news websites that deliver real-time updates and content-rich experiences. Whether you're covering local events or global headlines, we create dynamic, custom news portals that drive traffic, increase engagement, and monetize readership effectively.
                                    News portal website development solution for the newspaper, media, and news channel industry. News Portal Website Development Company is an online communication medium for internet users who are read all over the world. Even for individual and online newspaper website media, news channel industry, and even individual freelance journalists. Our expertise lies in our complete experience in the IT business with conterminous variation, innovative and latest ideas, perfect timing, and a ready-to-help perspective. The news portal development allows us to publish articles, blogs, press releases, columns, publications, and other news-related content.
                                    Seawind Solution, a leading Web Design and Development company, provides appealing and efficient news portal web development, and online solutions for newspapers, media, the news channel industry, and even individual freelance journalists. A special website design is often created by Seawind Solution that brings together news from various sources. No matter, whether you are a journalist, a popular news portal website development company, or a channel, a News Portal is the only thing that helps you to reach your audience by utilizing the latest technologies. The IT industry has reached new heights in the digital world. You can get any news from anywhere and anytime of the day with the help of this news portal.
                                    We offer custom news web portal design and development services including news web operation development, being news website improvement, news portal maintenance and support.

                                    We design and develop your news portal according to your custom requirements with dynamic orders and sections like indigenous and international news, life, sports, entertainment, business etc.

                                    Our news website CMS (Content Management System) allows news owners to publish news, press releases, articles, blogs, online polls and other related content. Also, the news websites we develop are completely SEO friendly solutions for high visibility in search engine page rankings.
 
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
                <div class="col-lg-6 py-5 fixed-image">
                    <div class="banner-thumbnail">
                        <img src="{{asset('frontend/assets/images/banner/03 - News Portal/News Portal.jpg')}}" alt="Web Design Services">
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
                            <h5 class="mb-4 mx-auto text-white">News Portal</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="list-unstyled">
                                        <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Secured Admin/User Login and Profile Management
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" title="Customized Website Design" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Unlimited Dynamic News/ Media Sections
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Ads Manager Script or Banner
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>Custom Content Management System (CMS)
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i> Photo Gallery Management System
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
                                        <i class="fa fa-check me-2 text-success"></i> Multilevel Features (Admin, Author, Users and More)
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>  SEO Friendly
                                        </a>
                                    </li>
                                     <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i>  Story Archives
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="ecommerce-with-app.html" class="text-decoration-none">
                                        <i class="fa fa-check me-2 text-success"></i> Ratings and Reviews
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
                        <h5 class="mb-4 mx-auto text-white">Features</h5>
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
                                <h5 class="title text-white">Responsive Web Design Services</h5>
                                <p class="fw-bolder">Create Mobile-Friendly Websites That Deliver Seamless User Experience on Any Device</p>

                                <p class="desc">In today’s mobile-first digital landscape, your website must perform flawlessly across all screen sizes—desktop, tablet, and smartphone. Our Responsive Web Design Services ensure your site adapts automatically to any device, providing an intuitive, consistent, and engaging experience for your users. Whether you're building a corporate site, eCommerce store, or custom web app, we craft responsive designs that improve usability, boost SEO rankings, and drive more conversions.</p>
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
                                <h5 class="title text-white">Dynamic & User-Friendly Website Development</h5>
                                <p class="fw-bolder">Engage Visitors with Smart, Interactive & Easy-to-Use Web Solutions</p>
                                <p class="desc"> A modern website should do more than just display information—it should interact, engage, and convert. Our Dynamic & User-Friendly Website Development service is designed to deliver intelligent, interactive, and intuitive web experiences tailored to your business goals. Whether you're building an eCommerce site, service platform, or blog, we create dynamic </p>
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
                                <p class="fw-bolder">Connect Your Website Seamlessly to Social Platforms & Grow Your Online Presence</p>
                                <p class="desc"> In the digital age, your website and social media shouldn’t exist in silos. Our Social Media Integration Services bridge that gap—helping you connect your website or online store directly to platforms like Facebook, Instagram, Twitter (X), LinkedIn, TikTok, and YouTube. We build dynamic social features that increase engagement, enhance sharing, drive traffic, and improve</p>
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
                                <h5 class="title text-white">SEO Services</h5>
                                <p class="fw-bolder">Get Found on Google. Drive Organic Traffic. Grow Your Business.</p>
                                <p class="desc">Want more visibility, more traffic, and more leads—without paying for ads? Our SEO Services help your website rank higher on Google, Bing, and other search engines. We use proven, white-hat SEO strategies to boost your online presence, drive qualified traffic, and generate measurable results. Whether you’re a local business, eCommerce brand, SaaS provider, or service company, we create a personalized SEO strategy that brings long-term, sustainable growth.From technical SEO to keyword research, content optimization, and link building—we cover every angle to ensure your website dominates in search results.</p>
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
                                <h5 class="title text-white">Unique Web Design Services</h5>
                                <p class="fw-bolder">Stand Out Online with a Visually Striking, Brand-Focused Website</p>
                                <p class="desc"> Your website is the face of your brand—and in a crowded digital world, first impressions matter. Our Unique Web Design Services help you break free from cookie-cutter templates by delivering bold, creative, and brand-aligned designs that captivate users from the first click. We combine strategic UX/UI thinking with custom visuals to create websites that not only look exceptional but also perform flawlessly across all devices.Whether you're a startup, a creative agency, or an established brand looking to refresh your digital identity, we design websites that tell your story and drive results.</p>
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
                                <p class="fw-bolder">Protect Your Website, Users, and Business from Cyber Threats</p>
                                <p class="desc">In today’s digital age, cyber threats are everywhere—and your website is a prime target. Our Web Security Services provide complete protection against hacking, malware, data breaches, and other online vulnerabilities. We help businesses secure their websites with powerful tools and strategies, including SSL certificates, firewalls, malware scanning, and real-time monitoring. Whether you run an eCommerce store, SaaS platform, blog, or corporate site—we keep your digital presence safe, fast, and compliant.Let your visitors browse and shop with confidence while you protect your brand and dat</p>
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