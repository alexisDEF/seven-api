<?php

namespace Database\Factories;

use App\Models\Capacity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleCapacityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users=$this->count(User::class);
        $capacities = $this->count(Capacity::class);
        return [
            'user_id'=>$this->faker->numberBetween(1,$users),
            'capacity_id'=>$this->faker->numberBetween(1,$capacities),
        ];
    }
}
