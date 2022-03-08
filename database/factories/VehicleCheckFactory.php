<?php

namespace Database\Factories;

use App\Models\VehicleCheck;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleCheckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleCheck::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'observations'=>$this->faker->sentence,
            'signature'=>$this->faker->colorName,
            'date'=>$this->faker->dateTimeBetween('now','+1 year')
        ];
    }
}
