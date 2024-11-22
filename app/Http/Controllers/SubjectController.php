<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('subjects.index', [
            'subjects' => $subjects
        ]);
    }

    public function show(Subject $subject)
    {
        return view('subjects.show', ['subject' => $subject]);
    }
}
