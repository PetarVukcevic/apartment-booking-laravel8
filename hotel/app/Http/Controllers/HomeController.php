<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Apartment;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index() {

        $apartments = Apartment::latest()->get();
        $categories = Category::all();

        return view('home.index', [
            'apartments' => $apartments,
            'categories' => $categories
        ]);
    }

}
