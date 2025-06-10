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
    <style>
    .button-edit,
    .button-delete {
        background-color: #EAA636;
        color: white;
        padding: 8px 16px;
        font-size: 14px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.2s ease;
        text-decoration: none;
        display: inline-block;
        margin: 5px 0;
    }

    .button-edit:hover,
    .button-delete:hover {
        background-color: #cf8b28;
    }
    .card .form-label {
    font-size: 14px;
    color: var(--dark);
    margin-right: 5px;
}
.card .form-control {
    padding: 4px 8px;
    font-size: 14px;
    background-color: black;
    color: black;
}
</style>
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
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="bi bi-tiktok"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href="https://www.instagram.com/qikabakery.id"><i class="fab fa-instagram"></i></a>
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

        <!-- Cart in mobile only -->
        <li class="nav-item d-block d-lg-none mt-2">
            <a href="{{ url('cart') }}" class="nav-link">
                <img src="{{ asset('img/icons8-cart-50.png') }}" alt="Cart" width="28">
            </a>
        </li>
    </ul>

    <!-- Cart in desktop only -->
    <div class="d-none d-lg-block">
        <a href="{{ url('cart') }}" class="nav-link">
            <img src="{{ asset('img/icons8-cart-50.png') }}" alt="Cart" width="28">
        </a>
    </div>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ __('messages.product') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ __('messages.product') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" style="margin: 12rem 0;">
        <div class="container">
            {{-- <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">The Best Bakery In Your City</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">{{ __('messages.product_bakery') }}</p>
                <h1 class="display-6 mb-4">{{ __('messages.categories') }}</h1>
            </div>
            <div class="container">
    <div class="row g-4">
        @forelse ($products as $product)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
            <div class="text-center p-4">
                <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">
                    Rp{{ number_format($product->harga, 0, ',', '.') }}
                </div>
                <h4 class="mb-3">{{ $product->nama }}</h4>
                <span>{{ $product->deskripsi ?? 'Tidak ada deskripsi.' }}</span>
            </div>
            <div class="position-relative mt-auto">
                <img class="card-img" src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}">

                <div class="product-overlay">
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <label for="qty_{{ $product->id }}" class="form-label mb-0">{{ __('messages.number') }}</label>
                        &nbsp;
                        <input type="number" name="qty" id="qty_{{ $product->id }}" value="1" min="1" class="form-control" style="color: #000; background-color: #fff; width: 100px; height: 38px; padding: 5px; font-size: 16px;">
                        <button type="submit" class="button-edit">{{ __('messages.add_to_cart') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
    <p class="text-center">{{ __('messages.empty_product') }}</p>
@endforelse
    </div>
</div>
            </div>
        </div>
    </div>

    <!-- Product End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('messages.office_address') }}</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ __('messages.alamat') }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ __('messages.phone') }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ __('messages.email') }}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="bi bi-tiktok"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
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
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">{{ __('messages.gallery_photo') }}</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpeg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-4.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-5.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-6.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="{{ ("js/main.js") }}"></script>
</body>

</html>
