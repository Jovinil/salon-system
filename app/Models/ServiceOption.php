<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
