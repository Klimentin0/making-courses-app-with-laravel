<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store ()
    {
        // validate the form
        $attributes = request()->validate([
            'type' => [],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5), 'confirmed']
        ]);
        // create the user in the database
        $user = User::create($attributes);
        // log in
        Auth::login($user);
        // redirect
        return redirect('/lk');
    }
}
