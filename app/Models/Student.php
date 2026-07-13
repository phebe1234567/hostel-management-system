<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = [
        'user_id',
        'matric_no',
        'first_name',
        'last_name',
        'email',
        'phone',
        'course_of_study',
    ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
