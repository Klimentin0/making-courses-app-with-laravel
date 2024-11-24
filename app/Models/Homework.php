<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'type',
        'time',
        'url',

    ];


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
