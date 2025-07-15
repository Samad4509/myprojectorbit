@extends('frontend.master')
@section('title')
Product Page | Orbit
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
                                <h3 class="title h3">All Products</h3>
                                <ul class="page-list">
                                    <li class="rainbow-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="rainbow-breadcrumb-item active">Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcarumb area  -->
        </div>


     <!-- Start Products Section -->
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
                        Our Products
                    </span>
                    <h2 class="my-3">Complete Digital Solutions for Your Business</h2>
                    <p class="lead">We develop robust digital products to help businesses grow and succeed in the digital era.</p>
                </div>
            </div>
            
            <div class="row g-4">
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Marketplace"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-store fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">E-Ecommerce (With App) </h5>
                            <p class="card-text">Marketplace platform that allows multiple vendors to sell their products through your website.</p>
                            <a href="ecommerce.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Multi Vendor Ecommerce -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Marketplace"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-store fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Multi Vendor Ecommerce</h5>
                            <p class="card-text">Marketplace platform that allows multiple vendors to sell their products through your website.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- News Portal -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="News Portal"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-newspaper fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">News Portal</h5>
                            <p class="card-text">Modern news website with content management, categories, tags, and multimedia support.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog Site -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/261579/pexels-photo-261579.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Blog"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-blog fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Blog Site</h5>
                            <p class="card-text">Professional blogging platform with SEO optimization, social sharing, and analytics.</p>
                            <a href="products.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- ERP System -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="ERP System"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-network-wired fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">ERP System</h5>
                            <p class="card-text">Enterprise Resource Planning solution to integrate all business processes into one system.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Inventory Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/4482900/pexels-photo-4482900.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Inventory Management"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-boxes-stacked fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Inventory Management</h5>
                            <p class="card-text">Track stock levels, orders, sales and deliveries across multiple locations in real-time.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- HRM System -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="HRM System"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">HRM System</h5>
                            <p class="card-text">Human Resource Management software for employee records, payroll, attendance and more.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Hotel Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" 
                            class="card-img-top object-fit-cover" 
                            alt="Hotel Management"
                            style="height: 180px;">
                        <div class="card-body text-cente bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-hotel fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Hotel Management</h5>
                            <p class="card-text">Complete solution for hotel operations including reservations, housekeeping and billing.</p>
                            <a href="profile-details.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Hosting Site -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" 
                            class="card-img-top object-fit-cover" 
                            alt="Hosting Site"
                            style="height: 180px;">
                        <div class="card-body text-center bg-dark">
                            <div class="mb-3">
                                <i class="fas fa-server fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title text-white">Hosting Site</h5>
                            <p class="card-text">Web hosting platform with domain registration, email hosting and website builder.</p>
                            <a href="product-detail.html" class="btn button-color rounded-pill px-4 py-2 mt-2 stretched-link d-none text-white border-0">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- All Products Button -->
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
@endsection