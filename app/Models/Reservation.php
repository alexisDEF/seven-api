<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    use HasFactory;

    protected $fillable=['startDate', 'endDate', 'startCity', 'endCity', 'customer_id', 'agency_id', 'vehicle_id', 'driver_id'];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);

    }
}
