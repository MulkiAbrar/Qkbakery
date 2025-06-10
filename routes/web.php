<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Redirect root ke /home
Route::redirect('/', '/home');

// Halaman umum
Route::view('/home', 'home')->name('home');
Route::view('/about', 'about');
Route::view('/kontak', 'kontak');
Route::view('/payment', 'payment');

// Resource Product (CRUD lengkap di /product)
Route::resource('product', ProductController::class);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/create', [ProductController::class, 'create'])-> name('product.create');
Route::post('/store', [ProductController::class , 'store'])->name('product.store');
Route::get('/adminproduct', [ProductController::class , 'admin'])->name('product.admin');

Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/admin/products', [ProductController::class, 'admin'])->name('product.editAdmin');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/products/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// Admin khusus product
Route::get('/admin/products', [ProductController::class, 'admin'])->name('products.admin');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::delete('/checkout/remove/{id}', [CheckoutController::class, 'remove'])->name('checkout.remove');
Route::post('/cart/update-qty', [CartController::class, 'updateQty'])->name('cart.updateQty');


// Order & Payment
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('order.submit');
Route::get('/payment/{order}', [OrderController::class, 'showPayment'])->name('payment.show');
Route::post('/payment/confirm/{order}', [OrderController::class, 'confirmPayment'])->name('payment.confirm');
Route::get('/admin/orders', [OrderController::class, 'adminOrders'])->name('adminProduct');

// Admin orders
Route::prefix('admin')->group(function () {
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders');
});

// Payment controller routes
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
Route::post('/payment/upload-proof', [PaymentController::class, 'uploadProof'])->name('payment.upload_proof');
Route::post('/admin/verify-payment/{id}', [PaymentController::class, 'verifyPayment'])->name('admin.verifyPayment');

// Admin product edit/update/delete routes
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Language switcher
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name('lang.switch');

// Custom admin login routes
Route::get('/admin/login', function () {
    return view('login');
})->name('login');

Route::post('/admin/login', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username === 'admin' && $password === 'admin123') {
        session(['is_admin_logged_in' => true]);
        return redirect()->route('admin');
    }

    return back()->withErrors(['login' => 'Username atau password salah']);
})->name('admin.login.submit');

Route::get('/admin', function () {
    if (!session('is_admin_logged_in')) {
        return redirect()->route('login');
    }
    return view('admin');
})->name('admin');

Route::post('/admin/logout', function () {
    session()->forget('is_admin_logged_in');
    return redirect()->route('home');
})->name('admin.logout');






