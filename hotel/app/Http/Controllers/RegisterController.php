<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255', 'min:3'],
            'last_name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'max:255', 'min:10', Rule::unique('users', 'email')],
            'phone_number' => ['required', 'min:8'],
            'username' => ['required', 'max:255', 'min:8', Rule::unique('users', 'username')],
            'password' => ['required', 'max:50', 'min:8']
        ]);

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
