<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'package',
        'travelers',
        'travel_date',
        'additional_requests',
        'status',
        'user_id',
        'payment_status'
    ];
}
