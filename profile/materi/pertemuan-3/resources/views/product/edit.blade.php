@extends('layouts.app')
@section('content')
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8">
                <h2>Data Produk</h2>
                <p>Masukkan Data Dengan Lengkap</p>
                <form action="{{ route('product.update',['product' => $product->id]) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                            value="{{ old('nama') ?? $product->nama }}">
                        <label for="nama">Nama</label>
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="Laptop" {{ old('kategori') ??$product->kategori =='Laptop' ? 'selected' : '' }}>Laptop</option>
                            <option value="Handphone" {{ old('kategori') ??$product->kategori =='Handphone' ? 'selected' : '' }}>Handphone
                            </option>
                            <option value="Keyboard" {{ old('kategori') ??$product->kategori =='Keyboard' ? 'seleceted' : '' }}>Keyboard
                            </option>
                        </select>
                        <label for="kategori">Kategori</label>
                        @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Masukkan Deskripsi" value="{{ old('deskripsi') ?? $product->deskripsi }}">
                        <label for="deskripsi">Nama</label>
                        @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga"
                            value="{{ old('harga') ?? $product->harga }}">
                        <label for="harga">Harga</label>
                        @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
