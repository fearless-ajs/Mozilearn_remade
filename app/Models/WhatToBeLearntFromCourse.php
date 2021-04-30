<?php

namespace App\Models;

use App\Transformers\WhatToBeLearntFromCourseTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatToBeLearntFromCourse extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = WhatToBeLearntFromCourseTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'course_id',
      'to_be_learnt'
    ];

    /*
     * The course that owns this what_to_be_learnt
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
