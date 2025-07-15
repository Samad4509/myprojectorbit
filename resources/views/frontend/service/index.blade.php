@extends('frontend.master')
@section('title')
Service Page | Orbit
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
                                <h3 class="title h3">All Service</h3>
                                <ul class="page-list">
                                    <li class="rainbow-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="rainbow-breadcrumb-item active">Service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcarumb area  -->
        </div>

       
        <!-- end movile nav -->
        <!-- Start Services Section -->
        <div class="container mt-5">
             <div class="blog-search text-end">  <!-- Added text-end -->
                <form action="#" method="GET" class="d-inline-block">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search blog posts..." aria-label="Search blog posts">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="d-inline-block bg-gradient-primary theme-gradient bg-clip-text text-transparent">
                        Our Services
                    </span>
                    <h2 class="my-3">Comprehensive Digital Solutions</h2>
                    <p class="lead">We provide end-to-end digital solutions to help your business grow in the modern era.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Web Design Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="Web Design"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-paintbrush fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Web Design</h5>
                            <p class="card-text">We create visually appealing and user-friendly websites tailored to your brand identity.</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Web Development Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Web Development"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-code fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Web Development</h5>
                            <p class="card-text">We offer full-stack web development services to create robust and scalable web applications</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Application Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="Mobile App"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-mobile-screen fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Mobile Application</h5>
                            <p class="card-text">Cross-platform mobile apps for iOS and Android.</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Development Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Development"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-laptop-code fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Development</h5>
                            <p class="card-text">Custom software solutions for your business.</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Desktop Application Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="Desktop App"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-desktop fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Desktop Application</h5>
                            <p class="card-text">Powerful desktop software solutions.</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Software Solution Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Custom Software"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-gears fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Customer Software Solution</h5>
                            <p class="card-text">Tailor-made software for your needs.</p>
                            <a href="service-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- All Services Button -->
            <div class="row mt-5">
                <!-- Pagination -->
                <div class="pagination-area">
                    <ul class="pagination">
                        <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end service -->
@endsection