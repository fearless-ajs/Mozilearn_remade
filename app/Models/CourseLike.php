<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseLike extends Model
{
    use HasFactory,  SoftDeletes;
    protected $fillable = ['student_id', 'course_id', 'instructor_id'];

    /*
     *  Relational methods
     *  Returns the course that owns the likes
     */
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    /*
     * The student that likes that drops the like
     */
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    /*
     * The instructor of the course
     */
    public function Instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

}
