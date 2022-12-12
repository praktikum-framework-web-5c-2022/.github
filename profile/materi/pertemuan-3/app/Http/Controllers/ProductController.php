<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:30',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($validate);
        return redirect()->route('products.index')->with('message',"Data produk {$validate['nama']} berhasil ditambahkan");
    }

    public function edit(Product $product)
    {
        return view('product.edit',['product' => $product->id]);
    }

    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'nama' => 'required|max:30',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::find($product->id)->update($validate);
        return redirect()->route('products.index')->with('message', "Data produk {$validate['nama']} berhasil diubah");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message', "Data produk $product->nama berhasil dihapus");
    }
}
