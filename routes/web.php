<?php

use App\Http\Controllers\BannerController;
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
    return view('front.frontend');
});

Route::get('/courses', function () {
    return view('front.pages.courses');
})->name('courses');

Route::get('/contact', function () {
    return view('front.pages.contact');
})->name('contact');

Route::get('/events', function () {
    return view('front.pages.events');
})->name('events');

Route::get('/news', function () {
    return view('front.pages.news');
})->name('news');

Route::get('/professors', function () {
    return view('front.pages.professors');
})->name('professors');

Route::resource('back/banners', BannerController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/back', function () {
    return view('back.backend');
});

require __DIR__.'/auth.php';
