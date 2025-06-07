<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // Simpan data user + produk, lalu redirect ke payment
    public function submitOrder(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email',
            // tambahkan validasi lain sesuai field
        ]);

        // Simpan order dengan status pending
        $order = Order::create([
            'user_id' => null,
            'product_id' => $request->product_id,
            'user_data' => $request->only(['name', 'email']), // contoh simpan data user
            'status' => 'pending',
        ]);

        // Redirect ke halaman payment
        return redirect()->route('payment.show', ['order' => $order->id]);
    }

    // Halaman payment user
    public function showPayment($order_id)
    {
        $order = Order::findOrFail($order_id);

        // Pesan status
        $message = $order->status === 'paid' ?
            'Sudah melakukan transaksi' : 'Lakukan pembayaran';

        return view('payment', compact('order', 'message'));
    }

    // Simulasi konfirmasi pembayaran (bisa diganti webhook / payment gateway)
    public function confirmPayment($order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->status = 'paid';
        $order->save();

        return redirect()->route('payment.show', ['order' => $order->id])
            ->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }

    // Halaman admin productAdmin
    public function adminOrders()
    {
        $orders = Order::all();

        return view('adminProduct', compact('orders'));
    }
}
