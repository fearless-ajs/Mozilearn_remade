<?php

namespace App\Models;

use App\Transformers\CourseTransformer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory,  SoftDeletes;

    public $transformer = CourseTransformer::class;

    protected $dates = ['deleted_at'];

    const FREE_COURSE = 'Free';
    const PREMIUM_COURSE = 'Premium';

    protected $fillable = [
        'instructor_id',
        'title',
        'type',
        'category',
        'price',
        'slug',
        'hint',
        'enrolled',
        'language',
        'subtitle_status',
        'money_back_guarantee',
        'seen',
        'like',
        'status',
        'dislike',
//        'requirement',
        'cover_image',
        'description'
    ];

    /*
     * Mutators
     */
    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug($slug).'_'.Carbon::now()->timestamp.'_'.Str::random(40);
    }

    /*
     *  The relational methods
     *  The Instructor of the course
     */
    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*
     * Sections in this course
     */
    public function sections()
    {
        return $this->hasMany(CourseSection::class);
    }

    /*
     * Lessons with each section in this course
     */
    public function lessons()
    {
        return $this->hasMany(CourseSectionContent::class);
    }

    /*
    * Ratings of the course
    */
    public function ratings()
    {
        return $this->hasMany(CourseRating::class);
    }

    /*
    * Requirements of this course
     */
    public function requirements()
    {
        return $this->hasMany(CourseRequirement::class);
    }

    /*
    * Student Reviews of this course
     */
    public function reviews()
    {
        return $this->hasMany(CourseReview::class);
    }

    /*
     * The likes of the course
     */
    public function likes()
    {
        return $this->belongsToMany(CourseLike::class);
    }

    /*
     * The likes of the course
     */
    public function dislikes()
    {
        return $this->hasMany(CourseDisLike::class);
    }

}
