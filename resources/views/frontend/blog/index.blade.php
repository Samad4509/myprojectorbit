@extends('frontend.master')
@section('title')
Blog Page | Orbit
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
        <!-- Start Breadcrumb Area  -->
        <div class="main-content">
            <!-- Start Breadcarumb area  -->
            <div class="breadcrumb-area breadcarumb-style-1 pt--180 pb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-inner text-center">
                                <h3 class="title h3">Our Blog</h3>
                                <ul class="page-list">
                                    <li class="rainbow-breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="rainbow-breadcrumb-item active">Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcarumb area  -->
        </div>
         <!-- Start Blog Posts Section -->
        <div class="blog-posts-area">
            <div class="container">
                <div class="col-lg-6 ms-auto">  <!-- Changed mx-auto to ms-auto (margin-start-auto) -->
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
        </div>
                <div class="row">
                    <!-- Blog Post 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-01.png" alt="Blog Post 1" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">The Future of Web Development</a></h4>
                                <p class="blog-excerpt">Explore the latest trends and technologies shaping the future of web development in 2025 and beyond.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-02.png" alt="Blog Post 2" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">Mobile App Design Principles</a></h4>
                                <p class="blog-excerpt">Learn the essential design principles that make mobile apps intuitive, engaging, and successful.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-03.png" alt="Blog Post 3" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">E-commerce Growth Strategies</a></h4>
                                <p class="blog-excerpt">Discover proven strategies to scale your e-commerce business and increase conversion rates.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Post 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-04.png" alt="Blog Post 4" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">Cloud Computing Benefits</a></h4>
                                <p class="blog-excerpt">How cloud computing can transform your business operations and reduce infrastructure costs.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-05.png" alt="Blog Post 5" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">AI in Business Automation</a></h4>
                                <p class="blog-excerpt">Implementing AI solutions to automate repetitive tasks and improve business efficiency.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 6 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-06.png" alt="Blog Post 6" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">Cybersecurity Best Practices</a></h4>
                                <p class="blog-excerpt">Essential cybersecurity measures every business should implement to protect their data.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 7 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-07.png" alt="Blog Post 7" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">Responsive Design Techniques</a></h4>
                                <p class="blog-excerpt">Modern techniques for creating websites that look great on all devices and screen sizes.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog Post 8 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="blog-post-item">
                            <img src="{{asset('frontend')}}/assets/images/blog/blog-08.png" alt="Blog Post 8" class="blog-post-img">
                            <div class="blog-post-content">
                                <h4 class="blog-title"><a href="{{route('blog.detail')}}">Digital Marketing Trends</a></h4>
                                <p class="blog-excerpt">The most effective digital marketing strategies for reaching your target audience in 2025.</p>
                                <a href="{{route('blog.detail')}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
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
        <!-- End Blog Posts Section -->
@endsection