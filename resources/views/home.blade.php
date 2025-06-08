<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QkBakery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <script>
        window.onload = function () {
            document.getElementById('spinner').classList.remove('show');
        };
    </script>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            {{-- <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
                </ol>
            </div> --}}
            <div class="col-lg-6 px-5 text-end">
                <small>{{ __('messages.follow_us') }}</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-lg-0 px-lg-5">
        <a href="{{ url('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">QkBakery</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto p-4 p-lg-0 text-center w-100">
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link">{{ __('messages.home') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('about') }}" class="nav-link">{{ __('messages.about') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('product') }}" class="nav-link">{{ __('messages.product') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('kontak') }}" class="nav-link">{{ __('messages.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/login') }}" class="nav-link">{{ __('messages.admin') }}</a>
                </li>
                <li class="nav-item" >
                    <a href="{{ url('cart') }}" class="nav-link">
                        <img src="{{ asset('img/icons8-cart-50.png') }}" alt="Cart" width="28" class="hover-image" style="padding-top: 1px;">
                    </a>
                </li>
                <li>
                    {{-- Language switcher commented out --}}
                </li>
            </ul>
        </div>

        <!-- Hanya tampil di desktop -->
        <div class="d-none d-lg-flex align-items-center ms-3">
            <div class="btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-primary"></i>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">{{ __('messages.call_us') }}</small>
                <p class="text-light fs-5 mb-0">{{ __('messages.phone') }}</p>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">{{ __('messages.best_bakery') }}</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">{{ __('messages.welcome') }}</h1>
                                <a href="{{ url('produk') }}" class="btn btn-primary rounded-pill py-3 px-5">{{ __('messages.shop_now') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">{{ __('messages.best_bakery') }}</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">{{ __('messages.we_bake_with_love') }}</h1>
                                <a href="{{ url('produk') }}" class="btn btn-primary rounded-pill py-3 px-5">{{ __('messages.shop_now') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{ asset('img/about-1.jpg') }}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{ asset('img/about-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">{{ __('messages.about_us') }}</p>
                        <h1 class="display-6 mb-4">{{ __('messages.bake_description') }}</h1>
                        {{-- Additional content can go here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6
