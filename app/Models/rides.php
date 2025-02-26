<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rides extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_location',
        'end_location',
        'departure_day',
        'departure_time',
        'available_seats',    
        'price',
        'status',
    ];

}
