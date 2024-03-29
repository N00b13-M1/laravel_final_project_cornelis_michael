<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailSubscriptionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagsandcategoryController;
use App\Models\Banner;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\News;
use App\Models\NewsCategorie;
use App\Models\Professor;
use App\Models\Service;
use App\Models\Tag;
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

//FRONT


Route::get('/', function () {
    $banners = Banner::all();
    $services = Service::all();
    $courses = Course::all();
    $news = News::all();
    // $teachers = Professor::all();
    $banners_carousel = Banner::where('primary', '=', "Yes")->orWhere('primary', '=', "No")->get();
    // dd($banners_carousel);
    $banners_asc = $banners_carousel->sortBy('primary');
    $banners_des = $banners_carousel->sortByDesc('primary');
    $favorites = Course::where('favorite', '=', "Yes")->get();
    // dd($favorites);
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

Route::get('/courses-free', function () {
    $banners = Banner::all();
    $sorted_free = Course::where('price','=', 'Free')->paginate(3);

    return view('front.pages.courses-free', compact('banners', 'sorted_free'));
})->name('courses-free');

Route::get('/courses-newest', function () {
    $banners = Banner::all();
    $sorted_newest = Course::orderBy('created_at', 'DESC')->paginate(3);

    return view('front.pages.courses-newest', compact('banners', 'sorted_newest'));
})->name('courses-newest');

Route::get('/courses-duration', function () {
    $banners = Banner::all();
    $sorted_duration = Course::orderBy('weeks', 'ASC')->paginate(3);

    return view('front.pages.courses-duration', compact('banners', 'sorted_duration'));
})->name('courses-duration');

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

Route::get('/events-likes', function () {
    $banners = Banner::all();
    $sorted_likes = Event::orderBy('likes','DESC')->paginate(3);
    return view('front.pages.events-likes', compact('banners', 'sorted_likes'));
})->name('events-likes');

Route::get('/events-location', function () {
    $banners = Banner::all();
    $sorted_location = Event::orderBy('where','DESC')->paginate(3);
    return view('front.pages.events-location', compact('banners', 'sorted_location'));
})->name('events-location');

Route::get('/events-stars', function () {
    $banners = Banner::all();
    $sorted_stars = Event::orderBy('stars','DESC')->paginate(3);
    return view('front.pages.events-stars', compact('banners', 'sorted_stars'));
})->name('events-stars');

Route::get('/news', function () {
    $banners_carousel = Banner::where('primary', '=', "Yes")->orWhere('primary', '=', "No")->get();
    // dd($banners_carousel);

    $banners = Banner::all();
    $news = News::all();
    $news =  News::paginate(4);
    $tags = Tag::all();
    $categories = Categorie::all();
    // dd($number = $news);
    return view('front.pages.news', compact('banners', 'news', 'tags', 'categories' ));
})->name('news');

Route::get('/search', [SearchController::class, 'search'])->name('news.search');


Route::get('/news/news-design', function () {
    $banners = Banner::all();
    $news_design = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'Design');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-design', compact('banners', 'news_design', 'tags', 'categories'));
})->name('news-design');


Route::get('/news/news-international', function () {
    $banners = Banner::all();
    $news_international = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'International');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-international', compact('banners', 'news_international', 'tags', 'categories'));
})->name('news-international');


Route::get('/news/news-learning', function () {
    $banners = Banner::all();
    $news_learning = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'Learning');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-learning', compact('banners', 'news_learning', 'tags', 'categories'));
})->name('news-learning');


Route::get('/news/news-read', function () {
    $banners = Banner::all();
    $news_read = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'Read');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-read', compact('banners', 'news_read', 'tags', 'categories'));
})->name('news-read');

Route::get('/news/news-education', function () {
    $banners = Banner::all();
    $news_education = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'Education');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-education', compact('banners', 'news_education', 'tags', 'categories'));
})->name('news-education');

Route::get('/news/news-finance', function () {
    $banners = Banner::all();
    $news_finance = News::whereHas('categories', function($q)
    {
        $q->where('category_desc', 'like', 'Finance');
    })->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    return view('front.pages.news-finance', compact('banners', 'news_finance', 'tags', 'categories'));
})->name('news-finance');


Route::get('/news/{id}', function ($id) {
    // dd($id);
    $banners = Banner::all();
    $news_post = News::where('id', $id)->get();
    $tags = Tag::all();
    $categories = Categorie::all();
    // $comments = Comment::all();
    $comments = Comment::where('post_id', $id)->get();
    // dd($comments);

    return view('front.pages.single-post', compact('banners', 'news_post', 'id', 'tags', 'categories', 'comments'));
})->name('news.single');


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

Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/inform-submit/', [NewsletterController::class, 'interest_submit'])->name('interest_submit');

Route::post('/comment-submit/{id}', [CommentController::class, 'store'])->name('comment_submit');


// Route::post('/teacher-message', [NewsletterController::class, 'interest_submit'])->name('interest_submit');


//BACKEND ROUTES

Route::middleware(['auth'])->group(function(){

    Route::post('/back/professor/{id}/teacher-message', [MessageController::class, 'message_submit'])->middleware(['auth'])->name('messages_submit');

    Route::post('/back/admin/admin-message', [MessageController::class, 'contact_submit'])->middleware(['auth'])->name('contact_submit');

    Route::resource('back/courses', CourseController::class);
    Route::resource('back/events', EventController::class);
    Route::resource('back/news', NewsController::class);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/back', function () {
        return view('back.backend');
    })->name('backend');

    Route::get('/back/interest/create', [NewsletterController::class, 'create_interest'])->name('message-center.create_interest');

    Route::post('/back/interest/store', [NewsletterController::class, 'store_interest'])->name('message_center.store_interest');

    Route::post('/back/subscriber/destroy/{id}', [NewsletterController::class, 'destroy_subscriber'])->name('message_center.destroy_subscriber');

    Route::post('/back/interest/destroy/{id}', [NewsletterController::class, 'destroy_interest'])->name('message_center.destroy_interest');

    Route::get('/dashboard/messages', [MessageController::class, 'index'])->middleware(['auth'])->name('messages');

    Route::get('/dashboard/courses', [MessageController::class, 'index'])->middleware(['auth'])->name('courses');
    Route::get('/dashboard/appointments', [MessageController::class, 'index'])->middleware(['auth'])->name('appointments');

    Route::resource('back/profiles', UserController::class);

    Route::middleware(['is_admin'])->group(function(){

        Route::resource('back/banners', BannerController::class);


        Route::resource('back/services', ServiceController::class);
        Route::resource('back/professors', ProfessorController::class);
        Route::resource('back/contacts', ContactController::class);

        // Route::resource('back/tagsandcategories', TagsandcategoryController::class);

        Route::get('back/tagsandcategories', [TagsandcategoryController::class, 'index'])->name('tagsandcategories.index');

        Route::get('back/tag/create', [TagsandcategoryController::class, 'create_tag'])->name('tagsandcategories.create_tag');

        Route::post('back/tag/store', [TagsandcategoryController::class, 'store_tag'])->name('tagsandcategories.store_tag');


        Route::get('back/category/create', [TagsandcategoryController::class, 'create_category'])->name('tagsandcategories.create_category');

        Route::post('back/category/store', [TagsandcategoryController::class, 'store_category'])->name('tagsandcategories.store_category');


        Route::get('back/show/{id}/tag', [TagsandcategoryController::class, 'show_tag'])->name('tagsandcategories.show_tag');
        Route::get('back/show/{id}/category', [TagsandcategoryController::class, 'show_category'])->name('tagsandcategories.show_category');

        Route::get('back/edit/{id}/tag', [TagsandcategoryController::class, 'edit_tag'])->name('tagsandcategories.edit_tag');

        Route::post('back/update/{id}/tag', [TagsandcategoryController::class, 'update_tag'])->name('tagsandcategories.update_tag');

        Route::get('back/edit/{id}/category', [TagsandcategoryController::class, 'edit_category'])->name('tagsandcategories.edit_category');

        Route::post('back/update/{id}/category', [TagsandcategoryController::class, 'update_category'])->name('tagsandcategories.update_category');

        Route::post('back/delete/{id}/tag', [TagsandcategoryController::class, 'destroy_tag'])->name('tagsandcategories.destroy_tag');
        Route::post('back/delete/{id}/category', [TagsandcategoryController::class, 'destroy_category'])->name('tagsandcategories.destroy_category');

        // Route::post('back/mailsubscriptions', [NewsletterController::class, 'storeEmail']);
        // Route::get('back/mailsubscriptions', [EmailController::class, 'sendEmail']);


        Route::get('/back/message-center', [NewsletterController::class, 'index'])->name('message-center');

        Route::get('/back/subscriber/create', [NewsletterController::class, 'create_subscriber'])->name('message-center.create_subscriber');


        Route::get('/back/interest/create/details/{id}', [NewsletterController::class, 'getDetails'])->name('getDetails');


        Route::post('/back/subscriber/store', [NewsletterController::class, 'store_subscriber'])->name('message_center.store_subscriber');


        Route::get('/back/subscriber/edit/{id}', [NewsletterController::class, 'edit_subscriber'])->name('message_center.edit_subscriber');

        Route::get('/back/interest/edit/{id}', [NewsletterController::class, 'edit_interest'])->name('message_center.edit_interest');


        Route::post('/back/subscriber/update/{id}', [NewsletterController::class, 'update_subscriber'])->name('message_center.update_subscriber');

        Route::post('/back/interest/update/{id}', [NewsletterController::class, 'update_interest'])->name('message_center.update_interest');

    });

});

require __DIR__.'/auth.php';
