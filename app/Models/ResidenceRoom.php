<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResidenceRoom extends Model
{
     protected $fillable = [
        'residence_id',
        'room_number',
        'number_of_bunks',
        'active',
    ];

    public function residence()
    {
        return $this->belongsTo(Residence::class);
    }
}
