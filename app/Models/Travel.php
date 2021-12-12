<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}