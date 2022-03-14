<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function agent()
    {
        return $this->hasMany(Agent::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
