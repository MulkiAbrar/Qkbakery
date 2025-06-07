<?php

namespace App\Http\Controllers;

use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('adminProduct', compact('orders'));
    }
}
