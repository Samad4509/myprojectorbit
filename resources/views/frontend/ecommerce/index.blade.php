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
                                <div class="col-12 bg-dark text-white p-4 rounded">
                                    {!! $item->product_features !!}
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
                        <h5 class="mb-4 mx-auto text-white">{{$item->tech_title}}</h5>
                    </div>
                </div>
                <div class="row g-4 justify-content-center align-items-center text-center">
                    <!-- Example Tech Logos -->
                    @php
                        $techImages = json_decode($item->tech_images, true);
                    @endphp

                    @if($techImages)
                        @foreach($techImages as $image)
                            <div class="col-4 col-md-2">
                                <img src="{{ asset($image) }}" alt="Tech Image" class="img-fluid tech-logo">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="rainbow-service-area rainbow-section-gap rainbow-section-gapBottom-big">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-12 mx-auto">
                            <div class="section-title text-center">
                                <h5 class="mb-4 mx-auto text-white">{{$item->banner_title}} Features</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 col-">
                        <!-- Custom E-Commerce Design -->

                        @foreach ($itemfeaturs as $item)
                            <div class="col-md-4">
                            <div class="rainbow-box-card card-style-default aiwave-service-default has-bg-shaped h-100">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fas fa-paint-brush fa-2x"></i>
                                    </div>
                                    <div class="description centered-shape">
                                        <h5 class="title text-white">{{$item->feature_title}}</h5>
                                        <p class="fw-bold">{{$item->feature_sub_title}}</p>
                                        <p class="desc">{{$item->feature_description}}</p>
                                    </div>
                                </div>
                                <div class="bg-shaped d-none d-md-block">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg.png" alt="" class="bg shape-dark">
                                    <img src="{{asset('frontend')}}/assets/images/service/bg-hover.png" alt="" class="bg-hover shape-dark">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
@endsection