<?php

use App\Models\Apartment;
use App\Models\Category;
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
    return view('home', [
        'apartments' => Apartment::with('category')->get()
    ]);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/catalog', function () {
    return view('catalog', [
            'apartments' => Apartment::all()
    ]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('catalog', [
        'apartments' => $category->apartments()
    ]);
});

// TODO
//Route::get('catalog/{apartment}', function (Apartment $apartment) {
//    return view('apartment', [
//        'apartment' => Apartment::findOrFail($apartment)
//    ]);
//});

Route::get('/contact', function () {
    return view('contact');
});

Route::fallback(function ()
{
    # To Specific Controller
    return Redirect::to('/'); # ('/') if defined

    # To Specific View
    return response()->view('home', [], 404);
});



