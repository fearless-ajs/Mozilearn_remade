<?php

namespace App\Models;

use App\Transformers\CourseSectionTransformer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CourseSection extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = CourseSectionTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'position',
        'description'
    ];

    /*
     * Mutators
     */
    public function setSlugAttribute($title)
    {
        $this->attributes['slug'] = Str::slug($title).'_'.Carbon::now()->timestamp.'_'.Str::random(40);
    }

    /*
     * Relational methods
    * Lessons under this section
     */
    public function lessons()
    {
        return $this->hasMany(CourseSectionContent::class);
    }

    /*
     * The course that owns this section
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
