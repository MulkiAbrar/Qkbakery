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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
    .cart-table th, .cart-table td {
    text-align: center;
    vertical-align: middle;
}

    .quantity-wrapper {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-left: 132px;
}
.qty-input {
    width: 50px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    height: 30px;
    font-size: 16px;
}
.qty-btn {
    background-color: #EAA636;
    color: white;
    border: none;
    width: 30px;
    height: 30px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 4px;
}
.qty-btn:hover {
    background-color: #d18f29;
}

</style>
<script>
function updateQty(id, change) {
    const qtyInput = document.getElementById('qty_' + id);
    let currentQty = parseInt(qtyInput.value);
    let newQty = currentQty + change;
    if (newQty < 1) newQty = 1; // minimal 1

    qtyInput.value = newQty;
    const priceElement = document.getElementById('price_' + id);
    const totalElement = document.getElementById('total_' + id);
    const price = parseInt(priceElement.getAttribute('data-price'));
    const newTotal = price * newQty;
    totalElement.innerText = 'Rp ' + newTotal.toLocaleString('id-ID');
}
</script>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
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
            <p class="text-light fs-5 mb-0">+012 345 6789</p>
        </div>
    </div>
</nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ __('messages.your_cart') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ __('messages.cart') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
<div class="container">
    <h2>{{ __('messages.your_cart') }}</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table border="1" cellpadding="10" cellspacing="0" class="cart-table">
            <thead>
                <tr>
                    <th>{{ __('messages.name_bakery') }}</th>
                    <th>{{ __('messages.price') }}</th>
                    <th>{{ __('messages.number') }}</th>
                    <th>{{ __('messages.total') }}</th>
                    <th>{{ __('messages.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td id="price_{{ $id }}" data-price="{{ $item['harga'] }}">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                        <td class="px-3 py-2">
                        <div class="quantity-wrapper">
                        <button type="button" class="qty-btn" onclick="updateQty({{ $id }}, -1)">-</button>
                        <input type="number" id="qty_{{ $id }}" value="{{ $item['quantity'] }}" min="1" class="qty-input" readonly>
                        <button type="button" class="qty-btn" onclick="updateQty({{ $id }}, 1)">+</button>
                        </div>
                        </td>
                         <td id="total_{{ $id }}">Rp {{ number_format($item['harga'] * $item['quantity'], 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-delete">{{ __('messages.delete') }}</button>
                            </form>
                            <form action="{{ route('checkout.store', $cart[$id]) }}" method="POST">

                                <a class="button-edit" href="{{ url("checkout") }}">{{ __('messages.payment') }}</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>{{ __('messages.cart_empty') }}</p>
    @endif
</div>
    <!-- Product End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            {{-- <div class="row g-5"> --}}
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
                    </div> --}}
                {{-- </div> --}}
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
                </div>
            </div>
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
    <script src="{{ ("js/main.js") }}"></script>
</body>


</html>

