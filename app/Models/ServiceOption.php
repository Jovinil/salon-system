<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOption extends Model
{
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_service_option');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
