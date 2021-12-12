<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      //  $agencies = $this->count(Agency::class);
        return [
            'agency_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
