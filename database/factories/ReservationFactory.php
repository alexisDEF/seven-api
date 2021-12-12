<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      //  $vehicles = $this->count(Vehicle::class);
        return [
            'date'=>$this->faker->date('Y-m-d','now'),
            'vehicle_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
