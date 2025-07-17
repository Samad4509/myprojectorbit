<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/logo/favicon.png">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/feature.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/prism.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Top Area  -->
        <div class="header-top-news bg-image1">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner d-flex justify-content-between align-items-center">
                                <div class="content">
                                    <span class="rainbow-badge">info@theorbit.one</span>
                                    <span class="news-text">07935390848</span>
                                </div>
                                <div class="social-media d-flex align-items-center">
                                    <a href="#" class="social-icon mx-2"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-icon mx-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-icon mx-2"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-icon mx-2"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-close">
                <button class="close-button bgsection-activation">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- End Header Top Area  -->
        {{-- <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="{{ asset('frontend') }}/assets/images/light/switch/sun-01.svg" alt="Sun images"><span
                            title="Light Mode">
                            Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="{{ asset('frontend') }}/assets/images/light/switch/vector.svg"
                            alt="Vector Images"><span title="Dark Mode">
                            Dark</span>
                    </a>
                </li>
            </ul>
        </div> --}}
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img class="logo-light" src="{{ asset('frontend') }}/assets/images/logo/logo-dark.png"
                                    alt="ChatBot Logo">
                                {{-- <img class="logo-dark" src="{{ asset('frontend') }}/assets/images/logo/logo.png"
                                    alt="ChatBot Logo"> --}}
                            </a>
                        </div>
                    </div>
{{-- {{dd($products)}} --}}
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu-nav d-none d-lg-flex justify-content-center">
                            <ul class="mainmenu">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                {{-- <li class="has-dropdown has-menu-child-item position-relative"><a
                                        href="{{route('all.products')}}">Products</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('ecommerce.app')}}">
                                                <span>E-commerce(With App)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('multivandor')}}">
                                                <span>Multi Vendor Ecommerce</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('news.potral')}}">
                                                <span>News Portal</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('blogsite')}}">
                                                <span>Blog Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('erp')}}">
                                                <span>ERP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('accounted')}}">
                                                <span>Accountant Software </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('payroll')}}">
                                                <span>Payroll System</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('digital.merkiting')}}">
                                                <span>Digital Marketing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('inventory')}}">
                                                <span>Inventory Management</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('hrm')}}">
                                                <span>HRM</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('hotel')}}">
                                                <span>Hotel Management Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('hosting')}}">
                                                <span>Hosting Manage</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="has-dropdown has-menu-child-item position-relative">
                                    <a href="{{ route('all.products') }}">Products</a>
                                    <ul class="submenu">
                                        @foreach($products as $product)
                                            <li>
                                                <a href="{{route('ecommerce.app')}}">
                                                    <span>{{ $product['product_name'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="has-dropdown has-menu-child-item position-relative"><a
                                        href="{{route('service')}}">Service</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('webdesign')}}">
                                                <span>Web Design & Development</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('mobile.application')}}">
                                                <span>Mobile Application</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('desktop')}}">
                                                <span>Desktop Application</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('customer.software')}}">
                                                <span>Customer Software Solution</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('home')}}">Brand</a></li>
                                <li><a href="{{route('partner')}}">Partner</a></li>
                                <li><a href="{{route('blogsite')}}">Blog</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-2 col-md-6 col-6 position-static">
                        <div class="header-right">

                            <!-- Start Header Btn  -->
                            <div class="header-btn">
                                <a class="rainbow-gradient-btn" target="_blank"
                                    href="{{route('login')}}"><span>Login</span></a>
                            </div>
                            <!-- End Header Btn  -->

                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-bar ml--5 d-flex justify-content-end d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button" aria-label="Toggle mobile menu">
                                        <i class="fas fa-bars"></i> <!-- Correct Font Awesome class -->
                                    </button>
                                </div>
                            </div>
                            <!-- end menu button -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Moblie Nav -->
        <div class="popup-mobile-menu">
            <div class="inner-popup">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{ asset('frontend') }}/assets/images/logo/logo-dark.png"
                                alt="ChatBot Logo">
                            {{-- <img class="logo-dark" src="{{ asset('frontend') }}/assets/images/logo/logo.png"
                                alt="ChatBot Logo"> --}}
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button" aria-label="Close menu">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>


                <div class="content">
                    <ul class="mainmenu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li class="has-dropdown has-menu-child-item position-relative"><a href="#">Products</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('ecommerce.app')}}">
                                        <span>E-commerce(With App)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('multivandor')}}">
                                        <span>Multi Vendor Ecommerce</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('news.potral')}}">
                                        <span>News Porta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <span>Blog Site</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('erp')}}">
                                        <span>ERP</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('payroll')}}">
                                        <span>Payroll System</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('accounted')}}">
                                        <span>Accountend Software</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('digital.merkiting')}}">
                                        <span>Digital Marketing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('inventory')}}">
                                        <span>Inventory Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('hrm')}}">
                                        <span>HRM</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('hotel')}}">
                                        <span>Hotel Management Site</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('hosting')}}">
                                        <span>Hosting Manage</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown has-menu-child-item position-relative"><a
                                href="services.html">Service</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('webdesign')}}">
                                        <span>Web Design & Development</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('mobile.application')}}">
                                        <span>Mobile Application</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="service-detail.html">
                                        <span>Development</span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{route('desktop')}}">
                                        <span>Desktop Application</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('customer.software')}}">
                                        <span>Customer Software Solution</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('home')}}">Brand</a></li>
                        <li><a href="{{route('partner')}}">Partner</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    </li>
                    </ul>
                </div>
                <!-- Mobile Nav end -->

                <!-- Start Header Btn  -->
                <div class="header-btn d-block d-md-none">
                    <a class="btn-default @@btnClass" target="_blank" href="{{route('login')}}">Login</a>
                </div>
                <!-- End Header Btn  -->
            </div>
        </div>
        <!-- end movile nav -->
