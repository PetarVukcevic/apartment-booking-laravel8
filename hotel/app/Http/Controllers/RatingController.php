<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function store(Apartment $apartment)
    {
        $attributes = \request()->validate([
           'name' => 'required',
            'email' => 'email|required',
            'grade' => 'required',
            'comment' => 'required'
        ]);

        $apartment->ratings()->create($attributes);

        return redirect()->back();
    }
}
