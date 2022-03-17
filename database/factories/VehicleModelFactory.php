<?php

namespace Database\Factories;

use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class VehicleModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'brand' => 'Peugeot',
            'model' => '5008',
            'logoBrandUrl'=>'https://www.francecasse.fr/blog/wp-content/uploads/2014/01/2013.png',
            'vehiclesAvailable' => 100,
            'vehiclesUnavailable' => 25,
        ];

    }
}

