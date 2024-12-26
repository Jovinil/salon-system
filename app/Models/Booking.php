<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'booking_date',
    ];
    // public function serviceOption()
    // {
    //     return $this->belongsTo(ServiceOption::class);
    // }
    public function services()
    {
        return $this->belongsToMany(ServiceOption::class, 'booking_service');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
