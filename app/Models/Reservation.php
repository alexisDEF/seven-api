<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    use HasFactory;

    protected $fillable=['startDate', 'endDate', 'startAgency_id', 'endAgency_id', 'status' ,'customer_id', 'vehicle_id', 'driver_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);

    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);

    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

}
