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
        $startDate = $this->faker->dateTimeBetween('-5 months','now');
      //  $vehicles = $this->count(Vehicle::class);
        return [
            'startDate'=>$startDate,
            'endDate'=>$this->faker->dateTimeBetween($startDate,'+30 days'),
            'startAgency_id'=>$this->faker->numberBetween(1,10),
            'endAgency_id'=>$this->faker->numberBetween(1,10),
            'status_id' => $this->faker->numberBetween(1,4),
            'vehicle_id'=>$this->faker->numberBetween(1,10),
            'customer_id'=>$this->faker->numberBetween(1,10),
            'driver_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
