<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home', [HomeController::class, "index"])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

Route::get('/prices', function () {
    return view('prices');
})->name('prices');

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::resource("services", ServiceController::class)->only(["index"]);