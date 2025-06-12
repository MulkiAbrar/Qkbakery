<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QkBakery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset ("img/favicon.ico") }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset ("https://fonts.googleapis.com") }}">
    <link rel="preconnect" href="{{asset ("https://fonts.gstatic.com") }}" crossorigin>
    <link href="{{asset ("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap") }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset ("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css") }}" rel="stylesheet">
    <link href="{{asset ("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css") }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{asset ("lib/animate/animate.min.css") }}" rel="stylesheet">
    <link href="{{asset ("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset ("css/style.css") }}" rel="stylesheet">
</head>

<body>

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
                    <a class="btn-lg-square text-primary border-end rounded-0" href="https://www.facebook.com/share/1J5JUqHzGy/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href="https://tiktok.com/@qkbakery9"><i class="bi bi-tiktok"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href="https://s.shopee.co.id/1qQARgRRVj?share_channel_code=1"><i class="bi bi-bag"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href="https://www.instagram.com/qikabakery.id"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-lg-0 px-lg-5">
    <a href="{{ url('admin') }}" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">QkBakery</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav flex-column flex-lg-row ms-auto p-4 p-lg-0 text-center text-lg-start w-100">
        <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link">{{ __('messages.home') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('create') }}" class="nav-link">{{ __('messages.add') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin/orders') }}" class="nav-link">{{ __('messages.order') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin/products') }}" class="nav-link">{{ __('messages.product') }}</a>
        </li>
                <li class="nav-item d-block d-lg-none mt-3">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="hover-image">
                            {{ __('messages.Logout') }}
                        </button>
                    </form>
                </li>
            </ul>
            <div class="d-none d-lg-block ms-3">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover-image"">
                        {{ __('messages.Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ __('messages.admin_page') }}</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Admin Review Section -->
    <div class="container my-5">
    <h2 class="mb-4 text-center text-dark">{{ __('messages.admin_reviews') ?? 'User Reviews' }}</h2>

    @if(count($reviews) > 0)
        <div class="row">
            @foreach($reviews as $review)
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4 shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $review->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $review->email }}</h6>
                            <p class="fw-bold mb-1">{{ $review->subject }}</p>
                            <p class="card-text">{{ $review->message }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-end">
                            <small class="text-muted">{{ $review->created_at->format('d M Y, H:i') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info text-center">
            {{ __('messages.no_reviews_yet') ?? 'Belum ada ulasan yang masuk.' }}
        </div>
    @endif
</div>




    <!-- Footer Start -->
    {{-- <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5"> --}}
                {{-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Office Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Photo Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
        </div>
    </div> --}}
    <!-- Footer End -->


    {{-- <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End --> --}}


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset ("https://code.jquery.com/jquery-3.4.1.min.js") }}"></script>
    <script src="{{asset ("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{asset ("lib/wow/wow.min.js") }}"></script>
    <script src="{{asset ("lib/easing/easing.min.js") }}"></script>
    <script src="{{asset ("lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{asset ("lib/counterup/counterup.min.js") }}"></script>
    <script src="{{asset ("lib/owlcarousel/owl.carousel.min.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
