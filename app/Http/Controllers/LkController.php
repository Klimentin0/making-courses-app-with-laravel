<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LkController extends Controller
{


    public function show()
    {
        $user = Auth::user();
        //данные доступные обоим типам пользователей
        $commonData = [
            'user' => $user,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
        ];
        //если заолгинился ученик
        if ($user->type === 'student') {

            $student = $user->student;
            $commonData['year'] = $student ? $student->year : null;
            $commonData['subjects'] = $student ? $student->subjects : [];

            return view('lk.student', $commonData);
        }
        //если залогинился учитель
        elseif ($user->type === 'teacher') {

            $students = Student::with('user');
            $teacher = $user->teacher;
            $commonData['subjects'] = $teacher ? $teacher->subjects : null;
            $commonData['students'] = $students
                -> get()
                -> map(function($student) {
                    return [
                        'id' => $student->id,
                        'first_name' => $student->user->first_name,
                        'last_name' => $student->user->last_name,
                    ];
            });

            return view('lk.teacher', $commonData);
        }

        abort(404);
    }


}
