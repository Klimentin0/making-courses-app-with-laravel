<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function courses ()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function jobs (): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
