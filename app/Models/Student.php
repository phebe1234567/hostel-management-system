<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;
   protected $fillable = [
        'user_id',
        'matric_no',
        'first_name',
        'last_name',
        'email',
        'phone',
        'course_of_study',
        'password',
    ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function getFilamentNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

