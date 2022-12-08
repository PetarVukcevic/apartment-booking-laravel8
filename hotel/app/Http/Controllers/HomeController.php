<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Apartment;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index() {

        $apartments = Apartment::latest()->with('category', 'landlord')->get();
        $categories = Category::all();
        $about = About::first();

        return view('home.index', [
            'apartments' => $apartments,
            'categories' => $categories,
            'about' => $about
        ]);
    }

}
