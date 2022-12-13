<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function section() {

        $apartments = Apartment::latest()->with('category', 'landlord', 'city')->get();

        return view('admin.section', [
            'apartments' => $apartments
        ]);
    }
}
