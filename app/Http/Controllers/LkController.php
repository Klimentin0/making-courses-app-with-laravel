<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LkController extends Controller
{


    public function show()
    {
        $user = Auth::user();

        if ($user->type === 'student') {
            return view('lk.student',
            compact('user'),
            [
                'first_name' => Auth::user()->first_name,
                'last_name' => Auth::user()->last_name,
                'year' => Auth::user()->year,
            ]

            );
        }
        elseif ($user->type === 'teacher') {
            return view('lk.teacher',
            compact('user'),
            [
                'first_name' => Auth::user()->first_name,
                'last_name' => Auth::user()->last_name,
                'subject' => Auth::user()->subject,
            ]
            );
        }

        abort(404);




        // return view('lk', [
        //     'first_name' => Auth::user()->first_name,
        //     'last_name' => Auth::user()->last_name
        // ]);

    }


}
