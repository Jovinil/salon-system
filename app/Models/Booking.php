<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function serviceOptions()
    {
        return $this->belongsToMany(ServiceOption::class, 'booking_service_option');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
