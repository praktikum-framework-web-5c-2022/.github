@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data Mahasiswa</h3>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>Matakuliah Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mahasiswa->npm }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>
                                        @forelse ($mahasiswa->matakuliahs as $mk)
                                            <ul>
                                                <li>{{ $mk->nama }}</li>
                                            </ul>
                                        @empty
                                            Tidak ada matakuliah yang diambil
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{ route('mahasiswas.take',['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-info">Ambil Jadwal</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
