<?php

namespace App\Models;

use App\Transformers\TransactionTransformer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory,  SoftDeletes;
    public $transformer = TransactionTransformer::class;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'student_id',
        'course_id',
        'instructor_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

}
