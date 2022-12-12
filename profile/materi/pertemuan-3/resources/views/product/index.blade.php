@extends('layouts.app')
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="d-flex justify-content-between">
            <h2>Data Produk</h2>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <p>Dibawah ini merupakan data produk</p>
        @if(session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif

        <div class="table-responsive mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->kategori }}</td>
                            <td>{{ $product->deskripsi }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>
                                <a href="{{ route('products.edit',['product' => $product->id]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.delete',['product' => $product->id]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
