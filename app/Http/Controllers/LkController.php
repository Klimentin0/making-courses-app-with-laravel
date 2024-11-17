<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LkController extends Controller
{


    public function show()
    {

        return view('lk', [
            'first_name' => Auth::user()->first_name,
            'last_name' => Auth::user()->last_name
        ]);

    }


}
