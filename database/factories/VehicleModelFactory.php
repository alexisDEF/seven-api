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
            'vehiclesAvailable' => 100,
            'vehiclesUnavailable' => 25,
        ];

    }
}

