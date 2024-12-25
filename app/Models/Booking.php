<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function serviceOption()
    {
        return $this->belongsTo(ServiceOption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
