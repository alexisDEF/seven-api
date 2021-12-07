<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends User
{
    use HasFactory;

    public function vehicle(){
        return $this->hasMany(Vehicle::class);
    }

    public function agency(){
        return $this->belongsTo(Agency::class);
    }

    public function customer(){
        return $this->hasMany(Customer::class);
    }
}
