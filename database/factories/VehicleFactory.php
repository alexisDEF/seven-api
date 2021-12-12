<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'licencePlate'=>$this->faker->asciify('*******'),
            'mileage'=>$this->faker->randomFloat(2,1,350000),
            'hasToBePrepared'=>$this->faker->boolean,
            'hasToBeReturned'=>$this->faker->boolean,
            'isMaintenance'=>$this->faker->boolean,
            'onSale'=>$this->faker->boolean,
        ];
    }
}
