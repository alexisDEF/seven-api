<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Travel;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Travel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vehicles = $this->count(Vehicle::class);
        $drivers = $this->count(Vehicle::class);
        $agencies = $this->count(Agency::class);
        return [
            'startCity'=>$this->faker->city,
            'endCity'=>$this->faker->city,
            'vehicle_id'=>$this->faker->numberBetween(1,$vehicles),
            'driver_id'=>$this->faker->numberBetween(1,$drivers),
            'agency_id'=>$this->faker->numberBetween(1,$agencies)
        ];
    }
}
