<?php

namespace App\Models;

use App\Transformers\WhoThisCourseIsForTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhoThisCourseIsFor extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = WhoThisCourseIsForTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id',
        'who_this_course_is_for'
    ];

    /*
     * The course that owns this what_to_be_learnt
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
