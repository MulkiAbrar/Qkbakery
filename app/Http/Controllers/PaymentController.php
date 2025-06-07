<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $orders = Order::with('product')
        ->where(function ($query) use ($now) {
            $query->where('status', 'paid')
                ->orWhere(function ($q) use ($now) {
                    $q->where('status', 'pending')
                      ->where('created_at', '>=', $now->subHour());
                });
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return view('payment', compact('orders'));;
    }
    public function process(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
        ]);

        $order = Order::find($request->order_id);
        $order->status = 'paid';
        $order->save();

        return redirect()->route('payment.index')->with('success', 'Pembayaran berhasil diproses!');
    }
        public function uploadProof(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_proof' => 'required|image|max:2048',
        ]);

        $order = Order::find($request->order_id);
        $filePath = $request->file('payment_proof')->store('payment_proofs','public');
        $order->payment_proof = $filePath;
        $order->save();

        return redirect()->route('payment.index')->with('success', 'proof of transfer successfully sent, wait for verification from admin');
    }
        public function verifyPayment($id)
    {
        $order = Order::findOrFail($id);

        if ($order->status === 'pending' && $order->payment_proof) {
            $order->status = 'paid';
            $order->save();

            return back()->with('success', 'Pembayaran berhasil diverifikasi.');
        }

        return back()->with('error', 'Bukti tidak ditemukan atau status sudah diverifikasi.');
    }



}
