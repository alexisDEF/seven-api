<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // $customers = $this->count(Customer::class);
        return [
            'customer_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
