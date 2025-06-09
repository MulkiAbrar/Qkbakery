<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $product->nama }}</h1>
    <p>Harga: {{ $product->harga }}</p>
    <p>Deskripsi: {{ $product->deskripsi }}</p>
    <img src="{{ $product->gambar }}" alt="{{ $product->nama }}" width="200">
</body>
</html>
