<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function admin()
    {
        $products = Product::all();
        return view('editAdmin', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'gambar' =>'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'harga' => 'required|numeric',
            'deskripsi' =>'nullable'
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('produk', 'public');
        $imagePath = 'storage/' . $path;
    }

        Product::create([
            'nama' => $request->nama,
            'gambar' => $imagePath,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
    $request->validate([
        'nama' => 'required',
        'gambar' =>'nullable|image|mimes:png,jpg,jpeg|max:2048',
        'harga' => 'required|numeric',
        'deskripsi' =>'nullable'
    ]);

    $product = Product::findOrFail($id);

    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('produk', 'public');
        $product->gambar = 'storage/' . $path;
    }

    $product->nama = $request->nama;
    $product->harga = $request->harga;
    $product->deskripsi = $request->deskripsi ?? '';

    $product->save();

    return redirect()->route('product.admin')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.edit');
    }
}
