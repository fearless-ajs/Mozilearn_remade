<?php

namespace App\Models;

use App\Transformers\CourseReviewTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseReview extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = CourseReviewTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'course_id',
      'review',
      'student_id'
    ];

    /*
     * Relational models
     *
     * The student that reviewed this course
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /*
     * The course that owns this rating
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
