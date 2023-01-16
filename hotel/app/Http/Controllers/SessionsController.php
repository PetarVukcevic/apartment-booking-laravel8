<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        $attributes = \request()->validate([
           'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/');
        }

        throw ValidationException::withMessages([
            'username' => 'Provided credentials could not be verified!'
        ]);

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }

}
