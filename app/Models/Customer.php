<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends User
{
    use HasFactory;

    public function reservation(){
        return $this->belongsToMany(Booking::class);
    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
