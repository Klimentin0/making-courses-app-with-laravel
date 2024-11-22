<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if ($user->type === 'teacher') {
            $students = Student::with('user');
            $studentsList['students'] = $students
                ->get()
                ->map(function($student) {
                return [
                    'id' => $student->id,
                    'first_name' => $student->user->first_name,
                    'last_name' => $student->user->last_name,
                ];
            });

            return view('student.list', $studentsList);
        }

        abort(404);
    }
}
