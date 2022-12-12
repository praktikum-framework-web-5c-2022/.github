<?php

use App\Http\Controllers\MahasiswaController;
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

// Mahasiswa
Route::prefix('mahasiswa')->group(function(){
    Route::get('/',[MahasiswaController::class,'index'])->name('mahasiswas.index');
    Route::get('/take/{mahasiswa}',[MahasiswaController::class,'take'])->name('mahasiswas.take');
    Route::post('/take/{mahasiswa}', [MahasiswaController::class, 'takeStore'])->name('mahasiswas.takeStore');
});

// Pivot
Route::get('/jadwal',[MahasiswaController::class,'jadwal'])->name('jadwal');
