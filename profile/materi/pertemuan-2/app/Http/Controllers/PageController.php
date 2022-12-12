<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function productone()
    {
        $listProducts = collect(['Laptop','Handphone','Printer']);
        dump($listProducts);
    }

    public function producttwo()
    {
        $listProducts = collect(['Laptop', 'Handphone', 'Printer']);
        foreach ($listProducts as $item) {
            echo $item;
        }
    }

    public function productthree()
    {
        $prices = collect([2500,90000,45500,125000]);
        dump($prices->sum());
        dump($prices->min());
        dump($prices->max());
        dump($prices->average());
        dump($prices->median());
    }

    public function productfour()
    {
        $products = collect([
            'nama' => 'Laptop',
            'merk' => 'Macbook',
            'harga' => 95000
        ]);

        dump($products->get('merk'));
        dump($products->has('nama'));
        dump($products->forget('harga'));
        dump($products->flip('merk'));
        dump($products->search('Macbook'));

        $products->each(function($value, $key){
            echo "${key}: ${value} <br>";
        });
    }

    public function insert()
    {
        $sql = DB::insert("INSERT INTO products (name,description,price) VALUES ('Macbook','Mackbook M1 Pro',45000000)");
        dump($sql);

        $sql = DB::table('products')->insert([
            'name' => 'Acer',
            'description' => 'lorem ipsum dolor sit amet',
            'price' => 900500
        ]);
        dump($sql);

        Product::create([
            'name' => 'Samsung',
            'description' => 'Lorem ipsum dolor',
            'price' => 520000
        ]);
        return "Berhasil";
    }

    public function select()
    {
        $sql = DB::select("SELECT * FROM products");
        dump($sql);

        $sql = DB::table('products')->get();
        dump($sql);
    }

    public function update()
    {
        $sql = DB::update("UPDATE products SET name='iphone' WHERE id=? ",[1]);
        dump($sql);

        $sql = DB::table('products')->where('name','Acer')->update([
            'updated_at' => now(),
        ]);
        dump($sql);

        Product::find(1)->update([
            'name' => 'Asus'
        ]);
        return "Berhasil";
    }

    public function delete()
    {
        $sql =DB::delete("DELETE FROM products WHERE name = ?",["Iphone"]);
        dump($sql);

        $sql = DB::table('products')->where('name','Acer')->delete();
        dump($sql);

        $sql = Product::where('price','>',50000)->delete();
        dump($sql);
    }
}
