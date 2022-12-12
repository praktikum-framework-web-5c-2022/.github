<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function take(Mahasiswa $mahasiswa)
    {
        $matakuliahs = Matakuliah::get();
        return view('mahasiswa.take', compact('mahasiswa','matakuliahs'));
    }

    public function takeStore(Request $request)
    {
        $mahasiswa = Mahasiswa::where('npm', $request->npm)->first();
        $matakuliahs = Matakuliah::find($request->matakuliah_id);
        $mahasiswa->matakuliahs()->sync($matakuliahs);

        return redirect()->route('mahasiswas.index')->with('message','Berhasil');
    }

    public function jadwal()
    {
        $matakuliahs = Matakuliah::get();
        return view('jadwal',compact('matakuliahs'));
    }
}
