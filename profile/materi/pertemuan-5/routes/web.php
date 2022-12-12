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

// Faker
use Faker\Factory as Faker;
Route::get('/base', function(){
    $faker = Faker::create('id_ID');
    dump($faker->name);
    dump($faker->address);
    dump($faker->email);
    dump($faker->company);
    dump($faker->date);
    dump($faker->username);
    dump($faker->password);
    dump($faker->url);
});

Route::get('/number', function () {
    $faker = Faker::create('id_ID');
    dump($faker->randomDigit);
    dump($faker->randomDigitNot(5));
    dump($faker->randomDigitNotNull);
    dump($faker->randomNumber(7));
    dump($faker->randomFloat(5,1,4));
    dump($faker->numberBetween(100,199));
});

Route::get('/alphanumeric', function () {
    $faker = Faker::create('id_ID');
    dump($faker->randomLetter);
    dump($faker->numerify('19###'));
    dump($faker->lexify('ID??AB??'));
    dump($faker->bothify('ID??AB##'));
    dump($faker->shuffle("Budi"));
});
