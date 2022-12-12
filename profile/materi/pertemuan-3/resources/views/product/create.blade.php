@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8">
                <h2>Data Produk</h2>
                <p>Masukkan Data Dengan Lengkap</p>
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                            value="{{ old('nama') }}">
                        <label for="nama">Nama</label>
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select name="kategori" id="kategori" class="form-select">
                            <option value="Laptop" {{ old('kategori')=='Laptop' ? 'selected' : '' }}>Laptop</option>
                            <option value="Handphone" {{ old('kategori')=='Handphone' ? 'selected' : '' }}>Handphone
                            </option>
                            <option value="Keyboard" {{ old('kategori')=='Keyboard' ? 'seleceted' : '' }}>Keyboard
                            </option>
                        </select>
                        <label for="kategori">Kategori</label>
                        @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Masukkan Deskripsi" value="{{ old('deskripsi') }}">
                        <label for="deskripsi">Nama</label>
                        @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga"
                            value="{{ old('harga') }}">
                        <label for="harga">Harga</label>
                        @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
