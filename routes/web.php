<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Session;

Route::redirect('/', '/home');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
});
Route::get('/kontak', function(){
    return view('kontak');
});
Route::get('/payment', function(){
    return view('payment');
});
// Route::get('/admin', function(){
//     return view('admin');
// });


//------------------------------------
Route::resource('product', ProductController::class);
Route::get('/create', [ProductController::class, 'create'])-> name('product.create');
Route::post('/store', [ProductController::class , 'store'])->name('product.store');
Route::get('/adminproduct', [ProductController::class , 'admin'])->name('product.admin');

Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product/{id}', [ProductController::class, 'update'])->name('product.update');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::delete('/checout/remover/{id}', [CheckoutController::class, 'CheckoutController@remove'])->name('checkout.remove');

Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('order.submit');
Route::get('/payment/{order}', [OrderController::class, 'showPayment'])->name('payment.show');
Route::post('/payment/confirm/{order}', [OrderController::class, 'confirmPayment'])->name('payment.confirm');
Route::get('/admin/orders', [OrderController::class, 'adminOrders'])->name('admin.orders');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

Route::prefix('admin')->group(function () {
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.product.index');
});

Route::post('/payment/upload-proof', [PaymentController::class, 'uploadProof'])->name('payment.upload_proof');
Route::post('/admin/verify-payment/{id}', [PaymentController::class, 'verifyPayment'])->name('admin.verifyPayment');


Route::get('/admin/products', [ProductController::class, 'admin'])->name('products.index');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/admin/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::post('/admin/products/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
})->name('lang.switch');


/*
|--------------------------------------------------------------------------
| Custom Admin Login Routes
|--------------------------------------------------------------------------
*/

// Tampilkan form login
Route::get('/admin/login', function () {
    return view('login');
})->name('login');

// Proses login
Route::post('/admin/login', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    // Contoh login sederhana (bisa diganti dari DB)
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

// use Illuminate\Support\Facades\Artisan;

// Route::get('/run-migrate', function () {
//     try {
//         Artisan::call('migrate', ['--force' => true]);
//         Artisan::call('db:seed', ['--force' => true]);
//         return 'Migration and seeding completed!';
//     } catch (\Exception $e) {
//         return 'Error: ' . $e->getMessage();
//     }
// });
// use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cache cleared!';
});
















