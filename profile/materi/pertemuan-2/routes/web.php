<?php

use App\Http\Controllers\PageController;
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

// Collection
Route::get('/product', [PageController::class,'index']);
Route::get('/productone',[PageController::class,'productone']);
Route::get('/producttwo',[PageController::class,'producttwo']);
Route::get('/productthree',[PageController::class,'productthree']);
Route::get('/productfour',[PageController::class,'productfour']);
Route::get('/productfive',[PageController::class,'productfive']);
Route::get('/productsix',[PageController::class,'productsix']);

Route::get('/insert', [PageController::class, 'insert']);
Route::get('/select', [PageController::class, 'select']);
Route::get('/update', [PageController::class, 'update']);
Route::get('/delete', [PageController::class, 'delete']);

