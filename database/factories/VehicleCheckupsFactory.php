<?php

namespace Database\Factories;

use App\Models\Checkup;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleCheckupsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Checkup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->date('Y-m-d', 'now'),
            'isReady'=>$this->faker->boolean,
        ];
    }
}
