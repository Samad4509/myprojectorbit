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

        {{-- <!-- Start Breadcrumb Area  -->
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
        </div> --}}


     <!-- Start Products Section -->
        {{-- <div class="container mt-5">
             <div class="blog-search text-end">  <!-- Added text-end -->
                <form action="#" method="GET" class="d-inline-block">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search blog posts..." aria-label="Search blog posts">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </form>
            </div> --}}


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