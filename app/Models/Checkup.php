<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function vehicle(){
        $this->belongsToMany(Vehicle::class);
    }
}
