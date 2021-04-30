<?php

namespace App\Models;

use App\Transformers\InstructorTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use HasFactory, SoftDeletes;
    public $transformer = InstructorTransformer::class;

    protected $dates = ['deleted_at'];

    protected $fillable = [
          'user_id',
          'biography',
          'qualification',
          'phone',
          'twitter',
          'linkedin',
          'facebook',
          'instagram',
          'github',
          'status',
          'gender',
          'address',
          'city',
          'state',
          'country',
          'language',
          'age'
    ];

    /*
     * The user that becomes our instructor
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Courses that belongs to this instructor
     */
    public function courses(){
        return $this->hasMany(Course::class);
    }


    /*
     * Courses that belongs to this instructor
     */
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}


