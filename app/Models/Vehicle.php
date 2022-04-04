<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function agent()
    {
        return $this->belongsToMany(Agent::class);
    }

    public function travel()
    {
        return $this->hasMany(Travel::class);
    }

    public function reservation()
    {
        return $this->hasMany(Booking::class);
    }

    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function checkup()
    {
        return $this->belongsToMany(Checkup::class);
    }
}
