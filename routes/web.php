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
use Illuminate\Support\Arr;
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
    // $teachers = Professor::all();
    $banners_carousel = Banner::where('primary', '=', "Yes")->orWhere('primary', '=', "No")->get();
    $banners_asc = $banners_carousel->sortBy('primary');
    $banners_des = $banners_carousel->sortByDesc('primary');
    $favorites = Course::where('favorite', '=', "Yes")->get();
    $random_prof = Professor::where('fixed', false)->get()->random(2);
    $teachers = Professor::where('fixed', true)->get()->take(2)->prepend($random_prof[0])->push($random_prof[1]);
    // dd($teachers);
    return view('front.frontend',compact('banners_carousel', 'banners_asc', 'banners_des', 'services', 'courses', 'news', 'teachers', 'favorites'));
})->name('home');

Route::get('/courses', function () {
    $banners = Banner::all();
    $courses = Course::paginate(3);

    $contact = Contact::all();

    return view('front.pages.courses', compact('courses', 'banners', 'contact'));
})->name('courses');

Route::get('/course/{id}', function ($id) {
    // dd($i);
    $banners = Banner::all();
    $courses = Course::where('id', $id)->get();
    // $course_bg2 = Course::ram

    $input = [
        "bg_2",
        "bg_3",
        "bg_4",
    ];
    $one = Arr::random($input,1)[0];
    $two = Arr::random($input,1)[0];
    $three = Arr::random($input,1)[0];

    return view('front.pages.single-course', compact('banners','courses', "id", "one", "two", "three"));
})->name('course.single');

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
    $professors =  Professor::paginate(4);
    return view('front.pages.professors', compact('banners', 'professors'));
})->name('professors');

Route::get('/professor/{id}', function ($id) {
    $banners = Banner::all();
    $professors = Professor::where('id', $id)->get();
    return view('front.pages.single-teacher', compact('banners','professors', 'id'));
})->name('professor.single');

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

