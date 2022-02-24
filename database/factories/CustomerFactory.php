<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $companies = $this->count(Company::class);
  //      $agents = $this->count(Agent::class);
        return [
            'company_id'=>$this->faker->numberBetween(1,10),
            'agent_id'=>$this->faker->numberBetween(1,10),
            'user_id'=>$this->faker->unique->numberBetween(1,15),
        ];
    }
}
