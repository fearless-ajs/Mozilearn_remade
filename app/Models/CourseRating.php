<?php

namespace App\Models;

use App\Transformers\CourseRatingTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseRating extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = CourseRatingTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id',
        'rating',
        'student_id'
    ];

    /*
     * Relational models
     *
     * The student that rated this course
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
