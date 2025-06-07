<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;



class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        return view('checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        $cart = session('cart', []);

        if(empty($cart)) {
            return redirect()->route('checkout.index')->with('error', 'Keranjang kosong!');
        }

        $total = 0;

        foreach ($cart as $productId => $item) {
            $subtotal = $item['harga'] * $item['quantity'];
            $total += $subtotal;

            Order::create([
                'user_name' => $request->nama,
                'user_address' => $request->alamat,
                'user_phone' => $request->no_hp,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'total_price' => $subtotal,
                'status' => 'pending',
            ]);
        }

        session()->forget('cart');

        return redirect()->route('payment.index')->with('success', 'Pesanan berhasil dibuat! Total: Rp' . number_format($total));
    }
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('checkout.index')->with('success', 'Produk dihapus dari cart!');
    }
}
