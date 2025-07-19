@extends('frontend.master')
@section('title')
Home Page | Orbit
@endsection
@section('body')
   <!-- End Header Area  -->
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


        <!-- Video Slider Section - Place this right after the header -->
        <section class="video-slider-section">
            <div class="container-fluid px-0">
                <div class="video-slider-container">
                    <!-- Slider Main Container -->
                    <div class="video-slider">
                        <!-- Slide 1 -->
                        <div class="video-slide">
                            <div class="video-container">
                                <video autoplay muted loop playsinline>
                                    <source src="{{asset('frontend')}}/assets/videos/slide1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-overlay"></div>
                                <div class="video-content">
                                    <h2>Innovative Web Solutions</h2>
                                    <p>Custom tailored for your business needs</p>
                                    <a href="#" class="rainbow-gradient-btn">Explore Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="video-slide">
                            <div class="video-container">
                                <video autoplay muted loop playsinline>
                                    <source src="{{asset('frontend')}}/assets/videos/slide2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-overlay"></div>
                                <div class="video-content">
                                    <h2>Mobile App Development</h2>
                                    <p>Cross-platform applications for all devices</p>
                                    <a href="#" class="rainbow-gradient-btn">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="video-slide">
                            <div class="video-container">
                                <video autoplay muted loop playsinline>
                                    <source src="{{asset('frontend')}}/assets/videos/slide3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-overlay"></div>
                                <div class="video-content">
                                    <h2>AI-Powered Tools</h2>
                                    <p>Cutting-edge technology for your business</p>
                                    <a href="#" class="rainbow-gradient-btn">Try Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Navigation -->
                    <div class="slider-nav">
                        <button class="slider-prev"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="slider-dots"></div>
                        <button class="slider-next"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
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

        <!-- Start Services Section -->
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="d-inline-block bg-gradient-primary theme-gradient bg-clip-text text-transparent">
                        Our Services
                    </span>
                    <h2 class="my-3">Comprehensive Digital Solutions</h2>
                    <p class="lead">We provide end-to-end digital solutions to help your business grow in the modern
                        era.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Web Design Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top object-fit-cover" alt="Web Design" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-paintbrush fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Web Design</h5>
                            <p class="card-text">We create visually appealing and user-friendly websites tailored to
                                your brand identity.</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Web Development Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="card-img-top object-fit-cover" alt="Web Development" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-code fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Web Development</h5>
                            <p class="card-text">We offer full-stack web development services to create robust and
                                scalable web applications</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Application Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top object-fit-cover" alt="Mobile App" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-mobile-screen fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Mobile Application</h5>
                            <p class="card-text">Cross-platform mobile apps for iOS and Android.</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Development Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="card-img-top object-fit-cover" alt="Development" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-laptop-code fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Development</h5>
                            <p class="card-text">Custom software solutions for your business.</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Desktop Application Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top object-fit-cover" alt="Desktop App" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-desktop fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Desktop Application</h5>
                            <p class="card-text">Powerful desktop software solutions.</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Customer Software Solution Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="card-img-top object-fit-cover" alt="Custom Software" style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-gears fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Customer Software Solution</h5>
                            <p class="card-text">Tailor-made software for your needs.</p>
                            <a href="service-detail.html"
                                class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- All Services Button -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                        <a class="rainbow-gradient-btn" href="{{route('service')}}"><span>View All Services</span></a>
                </div>
            </div>
        </div>
        <!-- end service -->

        <!-- Start Products Section -->
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="d-inline-block bg-gradient-primary theme-gradient bg-clip-text text-transparent">
                        Our Products
                    </span>
                    <h2 class="my-3">Complete Digital Solutions for Your Business</h2>
                    <p class="lead">We develop robust digital products to help businesses grow and succeed in the
                        digital era.</p>
                </div>
            </div>

            <div class="row g-4">
                 @foreach ($itemProducts as $item)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('product.show', $item->product_id)}}">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                            <img src="{{ asset($item->product_image) }}" 
                                class="card-img-top object-fit-cover" 
                                alt="{{ $item->banner_title }}"
                                style="height: 180px; object-fit: cover;">

                            <div class="card-body text-center bg-dark">
                                <div class="mb-3">
                                    <i class="fas fa-store fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title text-white">{{ $item->banner_title }}</h5>
                                <p class="card-text text-white">{{ Str::limit($item->banner_description, 100) }}</p>

                                <a href="{{ route('product.show', $item->product_id) }}" 
                                class="btn button-color rounded-pill px-4 py-2 mt-2 text-white border-0">
                                    Details <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- All Products Button -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a class="rainbow-gradient-btn" href="{{route('all.products')}}"><span>View All Products</span></a>
                </div>
            </div>
        </div>
        <!-- end products -->
        <!-- Start Blog Section -->
        <div class="rainbow-blog-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                            data-sal-delay="100">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Latest Articles</span>
                            </h4>
                            <h2 class="title mb--30">Insights & Updates</h2>
                            <p class="description b1">Discover our latest news, tutorials, and industry insights</p>
                        </div>
                    </div>
                </div>

                <div class="row row--15 mt--30">
                    <!-- Blog Post 1 - Technology -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="rainbow-card rainbow-blog blog-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                            alt="AI Technology">
                                    </a>
                                    <div class="category">
                                        <a href="#">Technology</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li><i class="fa-regular fa-calendar"></i> June 15, 2025</li>
                                        <li><i class="fa-regular fa-comments"></i> 5 Comments</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="blog-details.html">How AI is transforming modern businesses</a>
                                    </h4>
                                    <p class="description">Discover how artificial intelligence is revolutionizing
                                        industries...</p>
                                    <a class="read-more-btn" href="blog-details.html">Read More <i
                                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 2 - Development -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="rainbow-card rainbow-blog blog-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                            alt="Web Development">
                                    </a>
                                    <div class="category">
                                        <a href="#">Development</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li><i class="fa-regular fa-calendar"></i> June 10, 2025</li>
                                        <li><i class="fa-regular fa-comments"></i> 3 Comments</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="blog-details.html">Top web development trends in 2025</a>
                                    </h4>
                                    <p class="description">Explore the technologies shaping the future of web
                                        development...</p>
                                    <a class="read-more-btn" href="blog-details.html">Read More <i
                                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 3 - Marketing -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="rainbow-card rainbow-blog blog-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                            alt="Digital Marketing">
                                    </a>
                                    <div class="category">
                                        <a href="#">Marketing</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li><i class="fa-regular fa-calendar"></i> June 5, 2025</li>
                                        <li><i class="fa-regular fa-comments"></i> 8 Comments</li>
                                    </ul>
                                    <h4 class="title">
                                        <a href="blog-details.html">Digital marketing strategies that convert</a>
                                    </h4>
                                    <p class="description">Learn proven techniques to boost your online conversions...
                                    </p>
                                    <a class="read-more-btn" href="blog-details.html">Read More <i
                                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Blogs Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-all-btn text-center mt--60">
                            <a class="rainbow-gradient-btn" href="{{route('blog')}}"><span>View All Blogs</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Section -->
        <!-- Start Partner--one Area  -->
        <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-sal="slide-up" data-sal-duration="400"
                            data-sal-delay="150">
                            <h4 class="subtitle">
                                <span class="theme-gradient">Our Partners</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="service-wrapper rainbow-service-slider-actvation slick-grid-15 rainbow-slick-dot rainbow-gradient-arrows">
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Ask anything</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Connect everywhere</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Fast responding</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Ask anything</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Connect everywhere</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-single-layout">
                                <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                                alt="Google Logo" style="height: 50px;">
                                        </div>
                                        <div class="description centered-shape">
                                            <h5 class="title">Fast responding</h5>
                                            <p class="desc">Lets users quickly find answers to their questions
                                                without
                                                having to search through multiple sources.</p>
                                            <a class="read-more-btn" href="#">Explore More <span><i
                                                        class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="bg-shaped">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt=""
                                            class="bg-hover shape-dark">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg.png" alt="" class="bg shape-light">
                                        <img src="{{asset('frontend')}}/assets/images/light/service/bg-hover.png" alt=""
                                            class="bg-hover shape-light">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner--one Area  -->
@endsection