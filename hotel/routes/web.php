<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminApartmentController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\apartment\ApartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [MessageController::class, 'sendEmail'])->name('send.email');

Route::get('/catalog', [ApartmentController::class, 'apartments'])->name('catalog');
Route::get('catalog/{apartment:slug}', [ApartmentController::class, 'show']);
Route::post('catalog/{apartment:slug}', [RatingController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');




Route::get('/contact', [MessageController::class, 'create'])->name('contact');
Route::post('/contact', [MessageController::class, 'sendEmail'])->name('send.email');

Route::get('/about-us', [AboutController::class, 'page']);

Route::get('/faq', [FaqController::class, 'page']);

Route::get('/admin-apartments', [AdminApartmentController::class, 'section'])->middleware('admin');
//Route::delete('/admin-apartments/{id}', [AdminApartmentController::class, 'destroy'])->name('apartments.destroy');
Route::post('/admin-apartments', [AdminApartmentController::class, 'destroy'])->middleware('admin');
Route::get('/apartments-create', [AdminApartmentController::class, 'create'])->middleware('admin');
Route::post('/apartments-create', [AdminApartmentController::class, 'store'])->middleware('admin');

Route::get('/apartments-edit/{apartment}', [AdminApartmentController::class, 'edit'])->middleware('admin');
Route::patch('/apartments-edit/{apartment}', [AdminApartmentController::class, 'update'])->middleware('admin');

Route::get('/admin-about', [AboutController::class, 'edit'])->middleware('admin');
Route::patch('/admin-about', [AboutController::class, 'update'])->middleware('admin');

Route::get('/admin-features', [AboutController::class, 'features'])->middleware('admin');
Route::post('/admin-features', [AboutController::class, 'destroy'])->middleware('admin');
Route::get('/features-create', [AboutController::class, 'createFeature'])->middleware('admin');
Route::post('/features-create', [AboutController::class, 'storeFeature'])->middleware('admin');
Route::get('/features-edit/{feature}', [AboutController::class, 'editFeature'])->middleware('admin');
Route::patch('/features-edit/{feature}', [AboutController::class, 'updateFeature'])->middleware('admin');

Route::get('/admin-blogs', [AdminBlogController::class, 'blogs'])->middleware('admin');
Route::get('/blogs-create', [AdminBlogController::class, 'create'])->middleware('admin');
Route::post('/blogs-create', [AdminBlogController::class, 'store'])->middleware('admin');

Route::get('/blogs-edit/{blog}', [AdminBlogController::class, 'edit'])->middleware('admin');
Route::patch('/blogs-edit/{blog}', [AdminBlogController::class, 'update'])->middleware('admin');

Route::get('/admin-categories', [AdminCategoryController::class, 'all'])->middleware('admin');
Route::get('/categories-create', [AdminCategoryController::class, 'createCategory'])->middleware('admin');
Route::post('/categories-create', [AdminCategoryController::class, 'storeCategory'])->middleware('admin');

Route::get('/categories-edit/{category}', [AdminCategoryController::class, 'editCategory'])->middleware('admin');
Route::patch('/categories-edit/{category}', [AdminCategoryController::class, 'updateCategory'])->middleware('admin');
Route::post('/admin-categories', [AdminCategoryController::class, 'destroyCategory'])->middleware('admin');

Route::get('/admin-faqs', [FaqController::class, 'show'])->middleware('admin');
Route::get('/faqs-create', [FaqController::class, 'create'])->middleware('admin');
Route::post('/faqs-create', [FaqController::class, 'store'])->middleware('admin');
Route::post('/admin-faqs', [FaqController::class, 'destroy'])->middleware('admin');

Route::get('/faqs-edit/{faq}', [FaqController::class, 'editFaq'])->middleware('admin');
Route::patch('/faqs-edit/{faq}', [FaqController::class, 'updateFaq'])->middleware('admin');

Route::get('/admin-cities', [CityController::class, 'allCities'])->middleware('admin');
Route::post('/admin-cities', [CityController::class, 'destroyCities'])->middleware('admin');

Route::get('/cities-edit/{city}', [CityController::class, 'editCities'])->middleware('admin');
Route::patch('/cities-edit/{city}', [CityController::class, 'updateCities'])->middleware('admin');

Route::get('/cities-create', [CityController::class, 'createCities'])->middleware('admin');
Route::post('/cities-create', [CityController::class, 'storeCities'])->middleware('admin');



Route::fallback(function ()
{
    # To Specific Controller
    return Redirect::to('/'); # ('/') if defined

    # To Specific View
    return response()->view('home', [], 404);
});



