<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName,
            'lastname'=>$this->faker->lastName,
            'postalCode'=>$this->faker->postcode,
            'city'=>$this->faker->city,
            'email'=>$this->faker->email,
            'phoneNumber'=>$this->faker->phoneNumber,
            'driverLicence'=>$this->faker->unique()->asciify('***************'),
            'company_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
