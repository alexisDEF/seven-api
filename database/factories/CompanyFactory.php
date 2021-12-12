<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyName'=>$this->faker->company,
            'city'=>$this->faker->city,
            'postalCode'=>$this->faker->postcode,
            'street'=>$this->faker->streetName,
            'email'=>$this->faker->email,
            'phoneNumber'=>$this->faker->phoneNumber
        ];
    }
}
