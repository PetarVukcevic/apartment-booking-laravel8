<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function index() {


        return view('catalog', [
            'apartments' => Apartment::latest()->filter(request(['search']))->get(),

        ]);
    }

}
