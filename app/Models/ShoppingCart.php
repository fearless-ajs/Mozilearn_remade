<?php

namespace App\Models;

use App\Transformers\ShoppingCartTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCart extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = ShoppingCartTransformer::class;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'course_id',
        'user_id',
        'volume'
    ];

    /*
     * The course that owns this purchase
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    /*
     * The user that purchased this course
     */
    public function buyer()
    {
        return $this->belongsTo(User::class);
    }
}
