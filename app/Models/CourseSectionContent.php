<?php

namespace App\Models;

use App\Transformers\CourseSectionTransformer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CourseSectionContent extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = CourseSectionTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
      'course_id',
      'course_section_id',
      'title',
      'slug',
      'position',
      'description',
      'location'
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
     *
     * Section in which this lesson Belongs to
     */
    public function section()
    {
        return $this->belongsTo(CourseSection::class);
    }

    /*
    * Course in which this lesson Belongs to
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /*
     * Subtitle in which this lesson Belongs to
     */
    public function subtitle()
    {
        return $this->belongsTo(Subtitle::class);
    }
}

