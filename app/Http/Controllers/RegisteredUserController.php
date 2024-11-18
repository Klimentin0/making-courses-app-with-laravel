<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['required'],
            'type' => ['required', 'string'],
            'year' => ['required', 'integer'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5), 'confirmed']
        ]);



        // create the user in the database
        $user = User::create($attributes);



        if($attributes['type'] === 'teacher') {
            Teacher::create([
                'user_id' => $user->id,
            ]);
        } else {
            Student::create([
                'user_id' => $user->id,
            ]);
        }


        // log in
        Auth::login($user);
        // redirect
        return redirect('/lk')->with('success', 'Регистрация успешна!');
    }
}
