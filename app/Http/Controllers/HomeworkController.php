<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeworkRequest;
use App\Http\Requests\UpdateHomeworkRequest;
use App\Models\Homework;
use App\Models\Subject;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($subjectId)
    {
        $homeworks = Homework::with('subject')->where('subject_id', $subjectId)->latest()->simplePaginate(5);
        return view('homework.index', [
            'homeworks' => $homeworks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($subjectId)
    {
        $subject = Subject::findOrFail($subjectId);
        $homeworks = Homework::with('subject')->where('subject_id', $subjectId)->get();
       return view('homework.create', [
            'homeworks' => $homeworks,
            'subject' => $subject
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($subjectId)
    {
        request()->validate([
            'title' => ['required', 'min:4'],
            'description'=> ['required']
        ]);
        $homework = Homework::create([
            'title' => request('title'),
            'description' => request('description'),
            'subject_id' => $subjectId,
            'type' => 'test_type',
            'time' => '3 days',
            'url' => 'test.url',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Homework $homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homework $homework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeworkRequest $request, Homework $homework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homework $homework)
    {
        //
    }
}
