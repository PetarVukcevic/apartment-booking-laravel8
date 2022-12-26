<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminApartmentController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\apartment\ApartmentController;
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




Route::fallback(function ()
{
    # To Specific Controller
    return Redirect::to('/'); # ('/') if defined

    # To Specific View
    return response()->view('home', [], 404);
});



