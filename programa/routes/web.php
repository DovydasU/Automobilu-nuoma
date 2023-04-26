<?php

use App\Http\Controllers\CarController;
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

Route::resource("services", ServiceController::class)->only(["index"]);
// Route::get('/services', function () {
//     return view('services');
// })->name('services');

Route::get('/prices', [CarController::class, "prices"])->name('prices');
// Route::get('/prices', function () {
//     return view('prices');
// })->name('prices');


Route::get('/car', [CarController::class, "index"])->name('car');
// Route::get('/car', function () {
//     return view('car');
// })->name('car');


Route::get('/car/{car}', [CarController::class, "show"])->name('car.show');
// Route::get('/car-single', function () {
//     return view('car-single');
// })->name('car-single');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('/admin-login', function () {
    return view('admin-login');
})->name('admin-login');

// Route::get('/admin-register', function () {
//     return view('admin-register');
// })->name('admin-register');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/table', [CarController::class, "table"])->name('table');
// Route::get('/table', function () {
//     return view('table');
// })->name('table');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/add-car', function () {
    return view('add-car');
})->name('add-car');

Route::get('edit-car/{id}', function () {
    return view('edit-car');
})->name('edit-car');

Route::get('edit-car/{id}', function () {
    return view('edit-car');
})->name('edit-car');

Route::get('booking', function () {
    return view('booking');
})->name('booking');