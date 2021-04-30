<?php

namespace App\Models;

use App\Transformers\WishListTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WishList extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = WishListTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    /*
     * The course that owns this whishitem
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /*
     * The user that owns this wish
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
