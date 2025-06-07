<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
    }

 public function add(Request $request, $id)
{
    $product = Product::findOrFail($id); // ambil dari database, bukan dari form

    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += $request->qty;
    } else {
        $cart[$id] = [
            'nama' => $product->nama,
            'harga' => $product->harga,
            'quantity' => $request->qty,
        ];
    }

    session(['cart' => $cart]);

    return redirect()->route('cart.index')->with('success', 'Product added to cart!');
}



    // Hapus produk dari cart
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Produk dihapus dari cart!');
    }
}
