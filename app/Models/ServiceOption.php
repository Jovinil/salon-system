<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOption extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
