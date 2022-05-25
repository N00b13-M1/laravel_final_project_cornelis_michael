<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailSubscriptionController;
use App\Http\Controllers\NewsletterController;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\News_post;
use App\Models\Professor;
use App\Models\Service;
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
    $banners = Banner::all();
    $services = Service::all();
    $courses = Course::all();
    $news = News_post::all();
    $teachers = Professor::all();
    return view('front.frontend',compact('banners', 'services', 'courses', 'news', 'teachers'));
})->name('home');


Route::get('/courses', function () {
    $banners = Banner::all();
    $courses = Course::all();
    $contact = Contact::all();
    return view('front.pages.courses', compact('courses', 'banners', 'contact'));
})->name('courses');

Route::get('/contact', function () {
    $banners = Banner::all(); //Not needed if you include @php
    $contact = Contact::all();
    return view('front.pages.contact', compact('banners', 'contact'));
})->name('contact');

Route::get('/events', function () {
    $banners = Banner::all();
    $events = Event::all();
    return view('front.pages.events', compact('banners', 'events'));
})->name('events');

Route::get('/news', function () {
    $banners = Banner::all();
    return view('front.pages.news', compact('banners'));
})->name('news');

Route::get('/professors', function () {
    $banners = Banner::all();
    return view('front.pages.professors', compact('banners'));
})->name('professors');




Route::resource('back/banners', BannerController::class);
Route::resource('back/services', ServiceController::class);
Route::resource('back/courses', CourseController::class);
Route::resource('back/profiles', UserController::class);
Route::resource('back/professors', ProfessorController::class);
Route::resource('back/events', EventController::class);
Route::resource('back/contacts', ContactController::class);

Route::post('back/mailsubscriptions', [NewsletterController::class, 'storeEmail']);
Route::get('back/mailsubscriptions', [EmailController::class, 'sendEmail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/back', function () {
    return view('back.backend');
})->name('backend');



require __DIR__.'/auth.php';

