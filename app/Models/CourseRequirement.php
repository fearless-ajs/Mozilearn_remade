<?php

namespace App\Models;

use App\Transformers\CourseRequirementTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseRequirement extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = CourseRequirementTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id',
        'requirement'
    ];

    /*
     * The course that owns this requirement
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
