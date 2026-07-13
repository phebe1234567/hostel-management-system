<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    protected $fillable = [
        'residence_name',
        'active',
    ];

    public function residenceRooms()
    {
        return $this->hasMany(ResidenceRoom::class);
    }
}
