<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * // Show all homework for a specific course (students view)
     */
    public function index($courseId)
    {
        $jobs = Job::where('course_id', $courseId)->get();
        return view('job.index', compact('homeworks'));
    }

    /**
     * Show form to create new homework (teachers view)
     */
    public function create($courseId)
    {
        return view('job.create', compact('courseId'));
    }

    /**
     * // Store new homework (teachers action)
     */
    public function store(Request $request)
    {
        $request->validate([
            'test_number' => 'required|integer',
            'mark_value' => 'required|integer',
            'time_limit' => 'required|string',
            'course_id' => 'required|exists:courses,id'
        ]);

        Job::create($request->all());

        return redirect()->route('job.index', ['courseId' => $request->course_id])
        ->with('success', 'СОЗДАНО');
    }


    // Show form to edit existing homework (teachers view)
    public function edit(Job $job)
    {
        return view('job.edit', compact('job'));
    }

    // Update existing homework (teachers action)
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'mark_value' => 'required|integer',
            'time_limit' => 'required|string',
        ]);

        $job->update($request->all());

        return redirect()->route('job.index', ['courseId' => $job -> course_id])
        ->with('success', 'ispravleno');
    }















    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
