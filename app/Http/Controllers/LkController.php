<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $full_name = trim($user->last_name . ' ' . $user->first_name . ' ' . $user->middle_name);

        return view('lk', [
            'user' => $full_name
        ]);

    }

    public function show(User $user)
    {
        return view('lk', ['user' => $user]);
    }
}
