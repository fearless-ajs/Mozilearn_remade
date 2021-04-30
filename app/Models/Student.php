<?php

namespace App\Models;

use App\Transformers\StudentTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = StudentTransformer::class;
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
     * The user that becomes our student
     */
    public function student()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
