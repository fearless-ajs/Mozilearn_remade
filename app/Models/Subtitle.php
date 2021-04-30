<?php

namespace App\Models;

use App\Transformers\SubtitleTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class   Subtitle extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = SubtitleTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'lesson_id',
        'language',
        'location'
    ];

    /*
     * The lesson that owns this subtitle
     */
    public function lesson()
    {
        return $this->belongsTo(CourseSectionContent::class);
    }
}
