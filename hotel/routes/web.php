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


Route::get('/contact', [MessageController::class, 'create'])->name('contact');
Route::post('/contact', [MessageController::class, 'sendEmail'])->name('send.email');

Route::get('/about-us', [AboutController::class, 'page']);

Route::get('/faq', [FaqController::class, 'page']);

Route::get('/admin-apartments', [AdminApartmentController::class, 'section']);
//Route::delete('/admin-apartments/{id}', [AdminApartmentController::class, 'destroy'])->name('apartments.destroy');
Route::post('/admin-apartments', [AdminApartmentController::class, 'destroy']);
Route::get('/apartments-create', [AdminApartmentController::class, 'create']);
Route::post('/apartments-create', [AdminApartmentController::class, 'store']);

Route::get('/apartments-edit/{apartment}', [AdminApartmentController::class, 'edit']);
Route::patch('/apartments-edit/{apartment}', [AdminApartmentController::class, 'update']);

Route::get('/admin-about', [AboutController::class, 'edit']);
Route::patch('/admin-about', [AboutController::class, 'update']);

Route::get('/admin-features', [AboutController::class, 'features']);
Route::post('/admin-features', [AboutController::class, 'destroy']);
Route::get('/features-create', [AboutController::class, 'createFeature']);
Route::post('/features-create', [AboutController::class, 'storeFeature']);
Route::get('/features-edit/{feature}', [AboutController::class, 'editFeature']);
Route::patch('/features-edit/{feature}', [AboutController::class, 'updateFeature']);

Route::get('/admin-blogs', [AdminBlogController::class, 'blogs']);
Route::get('/blogs-create', [AdminBlogController::class, 'create']);
Route::post('/blogs-create', [AdminBlogController::class, 'store']);

Route::get('/blogs-edit/{blog}', [AdminBlogController::class, 'edit']);
Route::patch('/blogs-edit/{blog}', [AdminBlogController::class, 'update']);

Route::get('/admin-categories', [AdminCategoryController::class, 'all']);
Route::get('/categories-create', [AdminCategoryController::class, 'createCategory']);
Route::post('/categories-create', [AdminCategoryController::class, 'storeCategory']);

Route::get('/categories-edit/{category}', [AdminCategoryController::class, 'editCategory']);
Route::patch('/categories-edit/{category}', [AdminCategoryController::class, 'updateCategory']);
Route::post('/admin-categories', [AdminCategoryController::class, 'destroyCategory']);

Route::get('/admin-faqs', [FaqController::class, 'show']);
Route::get('/faqs-create', [FaqController::class, 'create']);
Route::post('/faqs-create', [FaqController::class, 'store']);
Route::post('/admin-faqs', [FaqController::class, 'destroy']);

Route::get('/faqs-edit/{faq}', [FaqController::class, 'editFaq']);
Route::patch('/faqs-edit/{faq}', [FaqController::class, 'updateFaq']);

Route::get('/admin-cities', [CityController::class, 'allCities']);
Route::post('/cities-create', [CityController::class, 'destroyCities']);

Route::get('/cities-create', [CityController::class, 'createCities']);
Route::post('/cities-create', [CityController::class, 'storeCities']);

Route::get('/cities-edit/{city}', [CityController::class, 'editCities']);
Route::patch('/cities-edit/{city}', [CityController::class, 'updateCities']);



Route::fallback(function ()
{
    # To Specific Controller
    return Redirect::to('/'); # ('/') if defined

    # To Specific View
    return response()->view('home', [], 404);
});



