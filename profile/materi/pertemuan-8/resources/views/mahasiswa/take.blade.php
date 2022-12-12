@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Ambil Jadwal</h3>
            <div class="card-body">
                <form action="{{ route('mahasiswas.takeStore',['mahasiswa' => $mahasiswa->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="matakuliah_id" class="form-label">Mata Kuliah</label>
                    <div class="form-group">
                        @foreach ($matakuliahs as $item)
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="matakuliah_id" id="{{ $item->id }}" class="form-check-input" value="{{ $item->id }}" {{ $mahasiswa->matakuliahs()->find($item->id) ? 'checked' : '' }}>
                                <label for="{{ $item->id }}" class="form-check-label">{{ $item->nama }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Ambil</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
