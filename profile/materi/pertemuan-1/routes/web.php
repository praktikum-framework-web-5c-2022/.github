<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', function(){
    return "Selamat datang di halaman store FASILKOM";
});

Route::get('store/{kode_produk}', function($kode_produk){
    return "Laptop Macbook Pro M1 2021";
});

Route::get('store/{kode_produk}/{nama_produk}', function($kode_produk, $nama_produk){
    return "Kode produk: ${kode_produk}, Nama produk: ${nama_produk}";
});

Route::get('/about', function(){
    return "Ini merupakan halaman about";
});

Route::redirect('/tentang-kami','/about');

Route::prefix('/store')->group(function(){
    Route::get('/product', function(){
        return "Daftar Produk";
    });

    Route::get('/category/{nama_kategori}', function($nama_kategori){
        return "Nama Kategori ${nama_kategori}";
    });
});

Route::fallback(function(){
    return "Halaman yang anda cari tidak ditemukan";
});

// View
Route::get('/belanja', function(){
    return view('store');
});

Route::get('/belanja-lagi', function(){
    return view('store',[
        'produk01' => "Macbook"
    ]);
});

// method with
Route::get('/belanja-with', function(){
    $listProduct = ['Macbook','Xiaomi','Iphone'];
    return view('belanja')->with('produk', $listProduct);
});

Route::get('/produk', function(){
    $listProduct = ['Mackbook','Xiaomi','Iphone'];
    return view('product')->with('products', $listProduct);
});
