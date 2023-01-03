<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function store(Apartment $apartment)
    {
        $attributes = \request()->validate([
            'grade' => 'required',
            'comment' => 'required',
            'user_id' => ''
        ]);
        $attributes['user_id'] = \request()->user()->id;
        $apartment->ratings()->create($attributes);

        return redirect()->back();
    }
}
