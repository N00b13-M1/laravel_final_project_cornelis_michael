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
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\News;
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
    $news = News::all();
    $teachers = Professor::all();
    $banners_carousel = Banner::where('primary', '=', "Yes")->orWhere('primary', '=', "No")->get();
    $banners_asc = $banners_carousel->sortBy('primary');
    $banners_des = $banners_carousel->sortByDesc('primary');
    // if($banners_carousel[0]->primary == 0)
    // {
    //     dd($banners_asc);
    // }
    // else{
    //     dd($banners_des);
    // }
    return view('front.frontend',compact('banners_carousel', 'banners_asc', 'banners_des', 'services', 'courses', 'news', 'teachers'));
})->name('home');



Route::get('/courses', function () {
    $banners = Banner::all();
    $courses = Course::all();
    $courses = Course::paginate(3);
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
    $events =  Event::paginate(3);
    return view('front.pages.events', compact('banners', 'events'));
})->name('events');

Route::get('/news', function () {
    $banners = Banner::all();
    $news = News::all();
    $news =  News::paginate(4);
    // dd($number = $news);
    return view('front.pages.news', compact('banners', 'news'));
})->name('news');

Route::get('/professors', function () {
    $banners = Banner::all();
    $professors = Professor::all();
    // $professors =  News::paginate(3);
    return view('front.pages.professors', compact('banners', 'professors'));
})->name('professors');

Route::resource('back/banners', BannerController::class);
Route::resource('back/services', ServiceController::class);
Route::resource('back/courses', CourseController::class);
Route::resource('back/profiles', UserController::class);
Route::resource('back/professors', ProfessorController::class);
Route::resource('back/events', EventController::class);
Route::resource('back/contacts', ContactController::class);
Route::resource('back/news', NewsController::class);

Route::post('back/mailsubscriptions', [NewsletterController::class, 'storeEmail']);
Route::get('back/mailsubscriptions', [EmailController::class, 'sendEmail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/back', function () {
    return view('back.backend');
})->name('backend');




require __DIR__.'/auth.php';

