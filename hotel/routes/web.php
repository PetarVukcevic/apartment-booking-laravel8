<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [MessageController::class, 'sendEmail'])->name('send.email');

Route::get('/catalog', [ApartmentController::class, 'apartments'])->name('catalog');
Route::get('catalog/{apartment:slug}', [ApartmentController::class, 'show']);


Route::get('/contact', [MessageController::class, 'create'])->name('contact');
Route::post('/contact', [MessageController::class, 'sendEmail'])->name('send.email');

Route::get('/about-us', [AboutController::class, 'page']);

Route::get('/faq', [FaqController::class, 'page']);

Route::get('/admin-apartments', [AdminController::class, 'section']);
//Route::delete('/admin-apartments/{id}', [AdminController::class, 'destroy'])->name('apartments.destroy');
Route::post('/admin-apartments', [AdminController::class, 'destroy']);



Route::fallback(function ()
{
    # To Specific Controller
    return Redirect::to('/'); # ('/') if defined

    # To Specific View
    return response()->view('home', [], 404);
});



