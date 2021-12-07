<?php

namespace App\Models;

use Cassandra\Custom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function customer(){
        return $this->hasMany(Customer::class);
    }

    public function driver(){
        return $this->hasMany(Driver::class);
    }
}
