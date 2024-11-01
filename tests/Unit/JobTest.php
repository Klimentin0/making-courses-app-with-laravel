<?php

use App\Models\Job;
use App\Models\Teacher;

test('it belongs to a teacher', function () {
    // Arrange Act Assert (AAA)

    // Arrange
    $teacher = Teacher::factory()->create();
    $job = Job::factory()->create([
        'teacher_id' => $teacher->id,
    ]);

    //Act and assert (sometimes they are separate)
    expect($job->teacher->is($teacher))->toBeTrue();

});
