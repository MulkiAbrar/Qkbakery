<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>QkBaker</title>
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

    <!-- Libraries Stylesheet -->
    <link href="{{asset ("lib/animate/animate.min.css") }}" rel="stylesheet">
    <link href="{{asset ("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset ("css/style.css") }}" rel="stylesheet">
</head>

<body>
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
.text-center{
    text-align: center;
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
        <h1 class="text-primary m-0">{{ __('messages.qk_bakery') }}</h1>
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
            <li class="nav-item" >
                <a href="{{ url('cart') }}" class="nav-link">
                    <img src="{{ asset('img/icons8-cart-50.png') }}" alt="Cart" width="28" class="hover-image" style="padding-top: 1px;">
                </a>
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
            <p class="text-light fs-5 mb-0">+012 345 6789</p>
        </div>
    </div>
</nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ __('messages.checkout') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ __('messages.checkout') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->


<div class="container mt-5">
    <h2>Checkout</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('messages.name_bakery') }}</th>
                    <th style="padding-left: 1px; padding-top: 10px;">{{ __('messages.qty') }}</th>
                    <th>{{ __('messages.price') }}</th>
                    <th>{{ __('messages.total') }}</th>
                    <th style="padding-left: 20px; padding-top 10px;">{{ __('messages.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp
                @foreach($cart as $id =>$item)
                    @php $subtotal = $item['harga'] * $item['quantity']; $grandTotal += $subtotal; @endphp
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rp{{ number_format($item['harga']) }}</td>
                        <td>Rp{{ number_format($subtotal) }}</td>
                        <td>
                            <form action="{{ route('checkout.remove', $id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button-delete">{{ __('messages.delete') }}</button>
                                    </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>

        <h4>{{ __('messages.total:') }} <strong>Rp{{ number_format($grandTotal) }}</strong></h4>

        <form action="{{ route('checkout.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="nama">{{ __('messages.full_name') }}</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat">{{ __('messages.address') }}</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp">{{ __('messages.number_phone') }}</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('messages.process_checkout') }}</button>
        </form>
    @else
        <p>{{ __('messages.cart_empty') }}</p>
    @endif
</div>


    <!-- Product End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        {{-- <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
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
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6">
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

