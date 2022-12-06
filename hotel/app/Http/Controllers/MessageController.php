<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function create() {
        return view('contact.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'full_name' => ['required', 'max:255', 'min:10'],
            'email' => ['required', 'email', 'max:255', 'min:10'],
            'telephone' => ['required', 'max:255', 'min:9'],
            'subject' =>['required' ,'max:255', 'min:4'],
            'body' => ['required', 'max:500']
        ]);

        Message::create($attributes);

        return redirect('/contact')->with('success', 'Thank you. We will contact you shortly.');

    }

}
